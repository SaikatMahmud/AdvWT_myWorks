<?php

namespace App\Http\Controllers;

use App\Models\EPAdmin;
use App\Models\EPCustomer;
use App\Models\EPDeliveryman;
use App\Models\EPSupplier;
use App\Models\EPWorker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){ //all done
        return view('login');   
    }
    public function logout(){
        session()->flush(); //delete all session
        session()->flash('msg','Sucessfully Logged out');
        return redirect()->route('user.login');
    }

    public function verifyLogin(Request $rq){
            $validator= Validator::make($rq->all(),
                [
                    "email" => "required",//|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",
                    "password" => "required",//|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}+$/",
                ]
            );
            if ($validator->fails()){
                return response()->json($validator->errors(),422);
            }
    
            if (Auth::attempt(['customer_email'=>$rq->email,'password'=>$rq->password])) {
                    //no guard, default auth with 'User.php' model
                $cus =EPCustomer::where('customer_email', $rq->email)->first();
                return response()->json("your are a customer");
               // session()->put('loggedCustomer',$cus);
                //return redirect()->route('home');
            }
            else if (Auth::guard('supplier')->attempt(['supplier_email'=>$rq->email,'password'=>$rq->password])) {
                return "You are Supplier !";
            }
            else if (Auth::guard('deliveryman')->attempt(['delman_email'=>$rq->email,'password'=>$rq->password])) {
                return "You are Deliveryman !";
            }
            else if (Auth::guard('worker')->attempt(['worker_email'=>$rq->email,'password'=>$rq->password])) {
                return "You are Worker !";
            }
            else if (Auth::guard('admin')->attempt(['admin_email'=>$rq->email,'password'=>$rq->password])) {
                return "You are Admin";
            }
            else
                return back()->withErrors(
                    ["notFound" => "Email or password not found"]);


            //    if ($user->type == 'Admin'){
            //         session()->put('loggedAdmin',$user->id);
            //         return redirect()->route('user.dash.admin');
            //     }
    
            //     else{
            //     session()->put('loggedUser',$user->id);
            //     return redirect()->route('user.dash');
            //     }
            // }
    
        }
}

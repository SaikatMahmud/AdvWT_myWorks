<?php

namespace App\Http\Controllers;

use App\Models\EPAdmin;
use App\Models\EPCustomer;
use App\Models\EPDeliveryman;
use App\Models\EPSupplier;
use App\Models\EPWorker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){ //all done
        return view('login');   
    }
    public function logout(){
        session()->flush();
        session()->flash('msg','Sucessfully Logged out');
        return redirect()->route('user.login');
    }

    public function verifyLogin(Request $rq){
            $rq->validate(
                [
                    "email" => "required",//|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",
                    "password" => "required",//|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}+$/",
                ]
            );
    
            if (Auth::attempt(['customer_email'=>$rq->email,'password'=>$rq->password])) {
                    //no guard, default auth with 'User.php' model
                $cus =EPCustomer::where('customer_email', $rq->email)->first();
                session()->put('loggedCustomer',$cus);
                return redirect()->route('home');
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

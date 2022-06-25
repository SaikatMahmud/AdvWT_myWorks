<?php

namespace App\Http\Controllers;

use App\Models\EPCustomer;
use App\Models\EPSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('public.login');
    }

    public function verifyLogin(Request $rq){
            $rq->validate(
                [
                    "email" => "required",//|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",
                    "password" => "required",//|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}+$/",
                ]
            );
    
            if (Auth::attempt(['customer_email'=>$rq->email,'password'=>$rq->password])) {
                    //no guard, default auth with User.php
                $cus =EPCustomer::where('customer_email', $rq->email)->first();
                return $cus;
            }

            else if (Auth::guard('supplier')->attempt(['supplier_email'=>$rq->email,'password'=>$rq->password])) {
    
                $cus =EPSupplier::where('supplier_email', $rq->email)->first();
                return $cus;
            }



            //    if ($user->type == 'Admin'){
            //         session()->put('loggedAdmin',$user->id);
            //         return redirect()->route('user.dash.admin');
            //     }
    
            //     else{
            //     session()->put('loggedUser',$user->id);
            //     return redirect()->route('user.dash');
            //     }
            // }
    
            // else
            //     return back()->withErrors(
            //         ["email" => "Email or password not found"]);
        }
}

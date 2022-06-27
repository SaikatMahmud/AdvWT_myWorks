<?php

namespace App\Http\Controllers;

use App\Models\EPCustomer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home(){
        return view('customer.homepage');
    }

    public function about(){
        return view('about');
    }

    public function reg(){
        return view('customer.reg');
    }

    public function regSubmit(Request $rq){
        {
            $rq->validate(
                [
                    "name" => "required",
                    "email" => "required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",
                    "mobile" => "required",
                    "password" => "required|min:4", //|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}+$/",
                    "confirmPass" => "required|min:4|same:password",
                ],
                [
                   // "password.regex" => "Password must contain upper/lower case, number, symbol and minimum 8 digits",
                    "confirmPass.same" => "Both passsword not matched"
                ]
            );
            $cus = new EPCustomer();
            $cus->customer_name = $rq->name;
            $cus->customer_email = $rq->email;
            $cus->customer_mob = $rq->mobile;
            $cus->password = bcrypt($rq->password);
            $cus->save();
            if ($cus->save())
                return redirect()->route('home');
    
            //return "Registration failed";
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class controlCustomer extends Controller
{
    public function home(){
        return view('customer.home');
    }

    public function reg(){
        return view('customer.reg');
    }

    function regSubmit(Request $req){
        $this->validate($req,
            [
                "mobile"=>"required|max:15|min:11|regex:/^([8]{2}[0-9]{11})+$/i",
                "name"=>"required",
                "dob"=>"required |before: -18 years",
                "password"=>"required|min:8",
                "confirmPass"=>"required|min:8|same:password",
                "email"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1}@student.aiub.edu)+$/i"
            ],
        [
            "mobile.regex"=>"Mobile no not valid"
        ]
        );
        $cus=new customer();
        $cus->mobile= $req->mobile;
        $cus->name= $req->name;
        $cus->dob= $req->dob;
        $cus->password= $req->password;
        $cus->email= $req->email;
        $cus->save();

        return "Resgistration done !";
        
    }

}

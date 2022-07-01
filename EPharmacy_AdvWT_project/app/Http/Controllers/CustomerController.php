<?php

namespace App\Http\Controllers;

use App\Models\EPCart;
use App\Models\EPCustomer;
//use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home()
    {
        return view('customer.homepage'); //done
    }
    public function about()
    {
        return view('about'); //done
    }
    public function reg()
    {
        return view('customer.reg'); //done
    }

    public function profile()
    {
        $cus=EPCustomer::where('customer_id',(session()->get('loggedCustomer')->customer_id))->first();
        return view('customer.profile')->with('cus',$cus);
    }
    public function cart()
    {
        $cart=EPCart::where('customer_id',(session()->get('loggedCustomer')->customer_id))->get();
        return view('customer.cart')->with('allCart',$cart);
    }
    public function orders()
    {
        return view('customer.order');
    }

    public function editProfile(Request $rq)
    {
        $rq->validate(
            [
                "name" => "required",
                "email" => "required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",
                "mobile" => "required",
                "cus_pic"=>"mimes:jpg,png,jpeg"

                // "password" => "required|min:4", //|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}+$/",
                //"confirmPass" => "required|min:4|same:password",
            ],
            [
                // "password.regex" => "Password must contain upper/lower case, number, symbol and minimum 8 digits",
                //"confirmPass.same" => "Both passsword not matched"
            ]
        );

        $image_name="";
        if($rq->hasFile('cus_pic')){
        $image_name=(session()->get('loggedCustomer')->customer_id)."_".(session()->get('loggedCustomer')->customer_name)
                                                        .".".$rq->file('cus_pic')->getClientOriginalExtension();
        File::delete('public'.'/'.session()->get('loggedCustomer')->pro_pic);
        $rq->file('cus_pic')->storeAs('public/cus_pic',$image_name);
        }

        EPCustomer::where('customer_id', session()->get('loggedCustomer')->customer_id)->update(
               ['customer_name' => $rq->name,
                'customer_email' => $rq->email,
                'customer_mob' => $rq->mobile,
                'customer_add' => $rq->address,
                'pro_pic'=>"cus_pic/".$image_name]
        );
        // getting new session after profile edit
        $cus =EPCustomer::where('customer_id', session()->get('loggedCustomer')->customer_id)->first();
        session()->forget('loggedCustomer');
        session()->put('loggedCustomer',$cus);
        session()->flash('msg','Edit saved');
        return back();
    }

    public function regSubmit(Request $rq)
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

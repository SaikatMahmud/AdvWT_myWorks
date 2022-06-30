<?php

namespace App\Http\Controllers;

use App\Models\EPCustomer;
use App\Models\EPMedicine;
use App\Models\EPOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder($med_id){
       $med=EPMedicine::where('medicine_id',$med_id)->first();
       if(($med->availability) ==0){
        return back()->withErrors(["stockOut" => "This medicine is currently stock out"]);
       }
       else
       return view('customer.buyNow')->with('med',$med);
    }

    public function confirmOrder(Request $rq){
        $rq->validate(
            [
                "quantity" => "required|integer|max:$rq->orgQuantity",
                "method" => "required",//|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",
                "address" => "required",
            ],
            [
                "quantity.integer"=>"Must be an decimal number",
                "quantity.max"=>"More than avaiable stock",
                "method.required"=>"Select one payment method",
                "address.required"=>"Address can not be blank",
            ]
        );
        $ord=new EPOrder();
        $ord->amount=0;
        $ord->method=$rq->method;
        $ord->status="Pending";
        $ord->c_id=session()->get('loggedCustomer')->customer_id;
        $ord->save();
        $ord->Medicines()->attach($rq->medId);

        if ($ord->save()){
        // updating customer address if changed during order
        EPCustomer::where('customer_id', session()->get('loggedCustomer')->customer_id)->update(
            ['customer_add' => $rq->address]);
        // updating medicine stock (minus)
        EPMedicine::where('medicine_id',$rq->medId)->update(['availability'=>($rq->orgQuantity-$rq->quantity)]);
                           //session()->put('loggedCustomer',$cus);
                return redirect()->route('home');
    }
    }
}

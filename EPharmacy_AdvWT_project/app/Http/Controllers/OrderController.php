<?php

namespace App\Http\Controllers;

use App\Models\EPCart;
use App\Models\EPCustomer;
use App\Models\EPMedicine;
use App\Models\EPOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $rq){
        return view('customer.placeOrder')->with('amount',$rq->subTotal);
    }

    public function confirmOrder(Request $rq){
        $rq->validate(
            [
                //"quantity" => "required|integer|max:$rq->orgQuantity",
                "method" => "required",//|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",
                "address" => "required",
            ],
            [
                //"quantity.integer"=>"Must be an decimal number",
               // "quantity.max"=>"More than avaiable stock",
                "method.required"=>"Select one payment method",
                "address.required"=>"Address can not be blank",
            ]
        );
        $medicines=EPCart::where('customer_id',session()->get('loggedCustomer')->customer_id)->get();
        $ord=new EPOrder();
        $ord->amount=$rq->amount;
        $ord->method=$rq->method;
        $ord->status="Pending";
        $ord->c_id=session()->get('loggedCustomer')->customer_id;
        $ord->save();
        foreach($medicines as $med){
        $ord->Medicines()->attach($med->medicine_id,['quantity'=>$med->quantity]);
        }

        if ($ord->save()){
        // updating customer address if changed during order
        EPCustomer::where('customer_id', session()->get('loggedCustomer')->customer_id)->update(
            ['customer_add' => $rq->address]);
        // updating medicine stock (minus)
        EPMedicine::where('medicine_id',$rq->medId)->update(['availability'=>($rq->orgQuantity-$rq->quantity)]);
            return view('customer.order_confirm_msg_page')->with('amount',$ord->amount);
        }
    }

    public function showList(){ //show all order of a customer
        $list=EPOrder::where('c_id',session()->get('loggedCustomer')->customer_id)->get();
        return view('customer.orderList')->with('orders',$list);
    }
}

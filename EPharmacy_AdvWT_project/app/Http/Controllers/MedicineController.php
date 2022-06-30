<?php

namespace App\Http\Controllers;

use App\Models\EPMedicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function searchResult(Request $rq)
    {
        // if (isset($rq->search)) 
        // {
        $keyword = $rq->search;
        //$res=EPMedicine::where('medicine_name','like','%'.$keyword.'%')->orWhere('genre','like','%'.$keyword.'%')  
        //
        $res = EPMedicine::paginate(2);
        return view('customer.search')->with('results', $res);
        //}
        // else
        // return "you didn't";
        //return view('customer.search')
        // print_r($rq->search);
    }

    public function details($id)
    {
        $med = EPMedicine::where('medicine_id', $id)->first();
        return view('customer.medDetails')->with('med', $med);
    }

    public function checkStock($med_id)
    {
        // checking the stock, if available sent to order placing form
        $med = EPMedicine::where('medicine_id', $med_id)->first();
        if (($med->availability) == 0) {
            return back()->withErrors(["stockOut" => "This medicine is currently stock out"]);
        } else
            return view('customer.buyNow')->with('med', $med);
    }

    public function addtocart($med_id)
    {
        $med = EPMedicine::where('medicine_id', $med_id)->first();
        $cart = session()->get('cart');
        // if cart is empty
        if (!$cart) {
            $cart = [
                $med_id => [
                    "name" => $med->medicine_name,
                    "quantity" => 1,
                    "price" => $med->price,
                ]
            ];
            session()->put('cart', $cart);
        }
        // if cart not empty
        if (isset($cart[$med_id])) {
            $cart[$med_id]['quantity']++;
            session()->put('cart', $cart);
        }
        // if item not exist in cart 
        else {
            $cart[$med_id] = [
                "name" => $med->medicine_name,
                "quantity" => 1,
                "price" => $med->price,
            ];
            session()->put('cart', $cart);
        }
    }
}

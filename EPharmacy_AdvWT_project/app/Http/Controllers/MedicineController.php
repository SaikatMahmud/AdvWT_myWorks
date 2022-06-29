<?php

namespace App\Http\Controllers;

use App\Models\EPMedicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function searchResult(Request $rq){
        // if (isset($rq->search)) 
        // {
            $keyword=$rq->search;
            //$res=EPMedicine::where('medicine_name','like','%'.$keyword.'%')->orWhere('genre','like','%'.$keyword.'%')  
            //
            $res=EPMedicine::paginate(2);
            return view('customer.search')->with('results',$res);
        //}
        // else
        // return "you didn't";
        //return view('customer.search')
        // print_r($rq->search);
    }
}

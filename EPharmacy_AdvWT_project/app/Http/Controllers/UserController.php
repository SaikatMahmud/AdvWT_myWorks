<?php

namespace App\Http\Controllers;

use App\Models\EPCustomer;
use App\Models\EPDeliveryman;
use App\Models\EPMedicine;
use App\Models\EPOrder;
use App\Models\EPSupplier;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAll(){
     // $med=EPMedicine::first()->Orders()->where('order_id',Orders->order_id)->first()->Delmans->delman_name;
     $med=EPMedicine::first()->Orders()->where('Order_id',3)->Delmans->delman_name;
     return $med;
    }
}

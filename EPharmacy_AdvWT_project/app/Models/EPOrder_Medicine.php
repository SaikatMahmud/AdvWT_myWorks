<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EPOrder_Medicine extends Model
{
    use HasFactory;
    protected $table='order_medicine';

    public function Medicines(){
        return $this->belongsTo(EPMedicine::class,'m_id','medicine_id');
    }

    public function Orders(){
        return $this->belongsTo(EPOrder::class,'o_id','order_id');
    }

    

}

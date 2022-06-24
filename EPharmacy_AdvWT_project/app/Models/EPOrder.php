<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EPOrder extends Model
{
    use HasFactory;
    protected $table='orders';

    public function Customers(){
        return $this->belongsTo(EPCustomer::class,'c_id','customer_id');
    }

    public function Delmans(){
        return $this->belongsTo(EPDeliveryman::class,'d_id','delman_id');
    }

    public function Medicines(){
        return $this->hasMany(EPOrder_Medicine::class,'o_id','order_id');
    }

}

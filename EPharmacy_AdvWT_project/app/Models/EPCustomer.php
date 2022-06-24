<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EPCustomer extends Model
{
    use HasFactory;
    protected $table='customers';

    public function Orders(){
        return $this->hasMany(EPOrder::class,'c_id','customer_id');
    }
}

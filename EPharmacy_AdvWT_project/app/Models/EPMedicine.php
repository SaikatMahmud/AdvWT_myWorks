<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EPMedicine extends Model
{
    use HasFactory;
    protected $table='medicines';

    public function Orders(){
        return $this->hasMany(EPOrder_Medicine::class,'medicine_id','medicine_id');
    }

    public function Suppliers(){
        return $this->hasMany(EPSupplier_Medicine::class,'medicine_id','medicine_id');
    }

}

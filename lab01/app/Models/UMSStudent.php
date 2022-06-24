<?php

namespace App\Models;
use App\Models\UMSDepartment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSStudent extends Model
{
    use HasFactory;
    protected $table='students';

    public function getDepartments(){
        return $this->belongsTo(UMSDepartment::class,'d_id','department_id');
    }

}

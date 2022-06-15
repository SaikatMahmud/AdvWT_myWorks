<?php

namespace App\Models;
use App\Models\UMSStudent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSDepartment extends Model
{
    use HasFactory;
    protected $table='departments';

    public function getStudents(){
        return $this->hasMany(UMSStudent::class,'d_id','id');
    }

    
}

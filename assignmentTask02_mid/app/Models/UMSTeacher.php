<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSTeacher extends Model
{
    use HasFactory;
    protected $table='teachers';

    public function Departments(){
        return $this->belongsTo(UMSDepartment::class,'d_id','teacher_id');
    }

}

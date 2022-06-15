<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSStudent extends Model
{
    use HasFactory;
    protected $table='students';

    public function Departments(){
        return $this->belongsTo(UMSDepartment::class,'d_id','student_id');
    }

    public function Courses(){
        return $this->hasMany(UMSStudent_Course::class,'course_id','sc_id');
    }

    
}


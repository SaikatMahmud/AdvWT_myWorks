<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSDepartment extends Model
{
    use HasFactory;
    protected $table='departments';

    public function Courses(){
        return $this->hasMany(UMSCourse::class,'d_id','course_id');
    }

    public function Students(){
        return $this->hasMany(UMSStudent::class,'d_id','student_id');
    }

    public function Teachers(){
        return $this->hasMany(UMSTeacher::class,'d_id','teacher_id');
    }
}

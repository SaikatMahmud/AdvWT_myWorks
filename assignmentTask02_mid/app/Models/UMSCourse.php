<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSCourse extends Model
{
    use HasFactory;
    protected $table='courses';

    public function Departments(){
        return $this->belongsTo(UMSDepartment::class,'d_id','department_id');
    }

    public function Students(){ //course has many students   //kaj kore
        return $this->hasMany(UMSStudent_Course::class,'course_id','course_id');
    }

    public function Teacher(){
        return $this->hasMany(UMSTeacher_Course::class,'course_id','course_id');
    }
    // public function Teachers(){ //course has many teacher
    //     return $this->hasMany(UMSTeacher_Course::class,'teacher_id','teacher_id');
    // }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSTeacher_Course extends Model
{
    use HasFactory;
    protected $table='teacher_courses';

    public function Teacher(){
        return $this->belongsTo(UMSTeacher::class,'teacher_id','teacher_id');
    }

    public function Courses(){
        return $this->belongsTo(UMSTeacher_Course::class,'course_id','course_id');
    }
     
}

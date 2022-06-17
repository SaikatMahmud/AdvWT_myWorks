<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSStudent_Course extends Model
{
    use HasFactory;
    protected $table='student_courses';

    // public function Courses(){ //courses belongs to students
    //     return $this->belongsTo(UMSStudent_Course::class,'student_id','student_id');
    // }

    public function Students(){ //kaj kore
        return $this->belongsTo(UMSStudent::class,'student_id','student_id');
    }

    public function Courses(){ //kaj kore
        return $this->belongsTo(UMSCourse::class,'course_id','course_id');
    }

}

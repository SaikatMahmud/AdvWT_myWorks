<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSStudent_Course extends Model
{
    use HasFactory;
    protected $table='student_courses';

    public function Students(){ //stu
        return $this->belongsTo(UMSStudent::class,'course_id','sc_id');
    }
    public function Courses(){
        return $this->hasMany(UMSCourse::class,'course_id','sc_id');
    }
}

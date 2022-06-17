<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSTeacher extends Model
{
    use HasFactory;
    protected $table='teachers';

    public function Departments(){
        return $this->belongsTo(UMSDepartment::class,'d_id','department_id');
    }
    public function Courses(){
        return $this->hasMany(UMSTeacher_Course::class,'teacher_id','teacher_id');
    }

}

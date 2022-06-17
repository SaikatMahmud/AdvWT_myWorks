<?php

namespace App\Models;
use App\Models\UMSDepartment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSStudent extends Model
{
    use HasFactory;
    protected $table='students';

    public function Departments(){
        return $this->belongsTo(UMSDepartment::class,'d_id','department_id');
    }

    public function Courses(){ //kaj kore
        return $this->hasMany(UMSStudent_Course::class,'student_id','student_id');
    }
    
}


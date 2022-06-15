<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSCourse extends Model
{
    use HasFactory;
    protected $table='courses';

    public function Departments(){
        return $this->belongsTo(UMSDepartment::class,'d_id','course_id');
    }

}

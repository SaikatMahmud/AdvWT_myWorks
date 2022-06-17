<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\UMSCourse;
use App\Models\UMSDepartment;
use App\Models\UMSStudent;
use App\Models\UMSTeacher;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function getAll(){
            $courses= UMSCourse::all();
            return view('all_info.details')->with('courses',$courses);
            
    }
}
           // return $course;
            //foreach ($courses as $c){
              // return $c->Teachers()->where('course_id',$c->course_id)->get(); //->Teachers->teacher_name;
               // $Name[]=$name;
            //}
            //  return $Name;


            // foreach ($courses as $key=>$c){
            //  $ttt=$c->Teachers()->where('course_id',$c->course_id)->first();
            // return $ttt->teacher_name;
            //     // foreach ($ttt as $t){
            //     // $teacher=$t->teacher_name;
            //     // $T[]=$teacher;}
                
            // } 
            //return $T ;


        // $depts=UMSDepartment::all();
        // foreach($depts as $dept)
        // {
        //     $courses=UMSCourse::where('d_id',$dept->department_id)->get();
        //     foreach($courses as $course)
        //     {
        //         $teachers=UMSTeacher::where('teacher_id',$course->course_id)->get();
        //         foreach($teachers as $teacher)
        //         {
        //             return $teacher;
        //         }
        //     }
        // }

        
        // $course=UMSCourse::where('d_id',$dept->department_id)->first();
        // return $course->Students()->where('student_id',34)->first();



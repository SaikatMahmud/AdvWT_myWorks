<?php

namespace App\Http\Controllers;

use App\Models\UMSStudent;
use App\Models\UMSDepartment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use App\Model\students;

class myPageControl extends Controller
{
    function signUp()
    {
        return view("public.registration");
    }
    function signUpSubmit(Request $req){
            $this->validate($req,
                [
                    "name"=>"required|max:10|min:3",
                    "id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                    "dob"=>"required",
                    "email"=>"required|",
                    "password"=>"required|min:8",
                    "conf_password"=>"required|min:8|same:password"
                ],
            
                [
                    "name.required"=>"Please provide your name",
                    "name.max"=>"Name should not exceed 10 characters",
    
                    
                ]);
    
            return "Form submitted";
            
        }

        // public function stdlist(){
        //     // $student = UMSStudent::all();
        //     // return $student;
        //     //$student = UMSStudent::where('d_id','1')->first(['name','id']);
        //     $student = UMSStudent::select('id','name','d_id')->first();
        //     return $student->student;
        //     //$dept = $student->dept1()->get();
        // }

        public function stdlist(){
        //$st= UMSStudent::find(5)->getDepartments;
$st= UMSStudent::first();
        return $st->getDepartments;
        }

        public function deptstd(){
            $dept = UMSDepartment::first();
            return $dept->getStudents;
        }

}
?>
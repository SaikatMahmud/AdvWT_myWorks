<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home(){
        return view('public.homepage');
    }

    public function about(){
        return view('public.about');
    }

    public function reg(){
        return view('public.reg');
    }

    public function login(){
        return view('public.login');
    }

    public function regSubmit(){
        
    }
}

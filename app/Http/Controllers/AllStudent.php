<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



Session_start();

class AllStudent extends Controller
{
    public function info()
    {
       //return view('admin.allstudent');
       $allstudent_info=DB::table('student_tbl')->get();
       $manage_student=view('admin.allstudent')->with('allstudent_info',$allstudent_info);
       return view('admin.admindashboard')->with('allstudent',$manage_student);
       
    }
}

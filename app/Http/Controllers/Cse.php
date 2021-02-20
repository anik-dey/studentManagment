<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



Session_start();

class Cse extends Controller
{
    public function info()
    {
       //return view('admin.cse');
       $csestudent_info=DB::table('student_tbl')->where(['student_department'=>'cse'])
       ->get();
       
       $manage_student=view('admin.cse')->with('csestudent_info',$csestudent_info);
       return view('admin.admindashboard')->with('cse',$manage_student);
    return view('admin.cse');

    }
}

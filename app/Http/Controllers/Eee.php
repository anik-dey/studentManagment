<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



Session_start();


class Eee extends Controller
{
    public function info()
    {
        $eeestudent_info=DB::table('student_tbl')->where(['student_department'=>'eee'])
        ->get();
        
        $manage_student=view('admin.eee')->with('eeestudent_info',$eeestudent_info);
        return view('admin.admindashboard')->with('eee',$manage_student);
     return view('admin.eee');
    }
}

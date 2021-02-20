<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



Session_start();

class AllTeacher extends Controller
{
    public function allteachers()
    {
        //return view('admin.allteacher');
        $allteacher_info=DB::table('teachers_tbl')->get();
        $manage_teacher=view('admin.allteacher')->with('allteacher_info',$allteacher_info);
        return view('admin.admindashboard')->with('allteacher',$manage_teacher);
    }
}

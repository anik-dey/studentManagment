<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfo extends Controller
{
    public function info()
    {
       return view('admin.studentinfo');
    }
}

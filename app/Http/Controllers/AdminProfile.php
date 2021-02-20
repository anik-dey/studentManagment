<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfile extends Controller
{
    public function view_admin()
    {
        return view('admin.adminprofile');
    }
}

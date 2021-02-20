<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



Session_start();

class AddTeacher extends Controller
{
    public function addteacher()
    {
        return view('admin.addteacher');
    }

    public function savedata(Request $request)
    {
        $data=array();
        $data['teacher_name']=$request->teacher_name;
      
        $data['teacher_phone']=$request->teacher_phone;
        //$data['student_picture']=$request->student_picture;
        $data['teacher_department']=$request->teacher_department;
        $data['teacher_email']=$request->teacher_email;
        $data['teacher_password']=md5($request->teacher_password);
        $image=$request->file('teacher_picture');
 
        if($image){
            $image_name= Str::random(40);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->MOVE($upload_path,$image_full_name);
            if($success){
                $data['teacher_picture']=$image_url;
                DB::table('teachers_tbl')->insert($data);
                Session::put('exception','Teacher added successfully !!');
                return Redirect::to('/addteacher');
            }
               
 
         }
             $data['image']=$image_url;
             DB::table('student_tbl')->insert($data);
             Session::put('exception','Student added successfully !!');
             return Redirect::to('/addstudent');
 
             $data['image']=$image_url;
             DB::table('student_tbl')->insert($data);
             Session::put('exception','Student Added Successfully !!');
             return Redirect::to('/addstudent');
    }
}

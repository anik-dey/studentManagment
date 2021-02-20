<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



Session_start();

class AddStudent extends Controller
{
    public function info()
    {
       return view('admin.addstudent');
    }

    public function add_student(Request $request)
    {
       $data=array();
       $data['student_name']=$request->student_name;
       $data['student_roll']=$request->student_roll;
       $data['student_phone']=$request->student_phone;
       //$data['student_picture']=$request->student_picture;
       $data['student_department']=$request->student_department;
       $data['student_email']=$request->student_email;
       $data['student_password']=md5($request->student_password);
       $image=$request->file('student_picture');

       if($image){
           $image_name= Str::random(40);
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='image/';
           $image_url=$upload_path.$image_full_name;
           $success=$image->MOVE($upload_path,$image_full_name);
           if($success){
               $data['student_picture']=$image_url;
               DB::table('student_tbl')->insert($data);
               Session::put('exception','Student added successfully !!');
               return Redirect::to('/addstudent');
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

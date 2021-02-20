<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



Session_start();

class AdminController1 extends Controller
{
    public function index()
    {
        
       return view('admin.admindashboard');
    }
    public function logout()
    {
         Session::put('admin_email',null);
         Session::put('admin_id',null);
         return Redirect::to('/admin');
    }


    public function add_admin(Request $request)
    {

        
        $email=$request->admin_email;
        $password=$request->admin_password;
        $result=DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();

         if ($result){
         Session::put('admin_email',$result->admin_email);
         Session::put('admin_id',$result->admin_id);
         Session::put('admin_name',$result->admin_name);
         $admin_id= $result->admin_id;
         // $manage_admin_view=view('admin.admindashboard')
         // ->with('admin_view',$result);
         
        
         
         $manage_student=view('admin.admindashboard')->with('admin_id',$admin_id);
         return view('admin.admindashboard')->with('admin',$manage_student);
          return view('admin.admindashboard');
          
         
         
         //return Redirect::to('/admindashboard');
          
         
         

                    
       }
       else{
        Session::put('exception','Email or Password Invalid');
        
       return Redirect::to('/admin');
        

       }

    }


    public function studentdelete($student_id)
    {
       DB::table('student_tbl')
       ->where('student_id',$student_id)
       ->delete();
       return Redirect::to('/allstudent');
    }

    public function studentedit($student_id)
    {
        //return view('admin.editstudent');
        $student_view= DB::table('student_tbl')
        ->select('*')
        ->where('student_id',$student_id)
        ->first();
      //   echo "</pre>";
      //   print_r($student_view);
      //   echo "</pre>";

        
        

         $manage_student_view=view('admin.editstudent')
         ->with('student_view',$student_view);
         
         return view('admin.admindashboard')
         ->with('/student_update',$manage_student_view);
         

    
    }

    public function studentupdate(Request $request,$student_id)
    {
       $data=array();
       
       $data['student_name']=$request->student_name;
       $data['student_roll']=$request->student_roll;
       $data['student_phone']=$request->student_phone;
       $data['student_email']=$request->student_email;
       $data['student_password']=md5($request->student_password);

       DB::table('student_tbl')
       ->where('student_id',$student_id)
       ->update($data);
       Session::put('exception','Update Student Information Successfully !!');
       return Redirect::to('/allstudent');

    }
   


}

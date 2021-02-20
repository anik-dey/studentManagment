<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin.adminlogin');
});
Route::post('/adminlogin','AdminController1@add_admin');
Route::get('/admindashboard','AdminController1@index');
Route::get('/logout','AdminController1@logout');
Route::get('/studentinfo','Studentinfo@info');
Route::get('/allstudent','AllStudent@info');
Route::get('/addstudent','AddStudent@info');
Route::get('/cse','Cse@info');
Route::get('/eee','Eee@info');
Route::get('/bba','Bba@info');
Route::post('/savedata','AddStudent@add_student');
Route::get('/student_delete/{student_id}','AdminController1@studentdelete');
Route::get('/student_edit/{student_id}','AdminController1@studentedit');
Route::post('/student_update/{student_id}','AdminController1@studentupdate');

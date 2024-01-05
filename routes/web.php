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

Route::get('/', function () {
    return view('login');
});

Route::get('about','user@about');
Route::post('form_submit','user@form_submit');




Route::get('/admin', function () {
    return view('admin/login');
});
Route::get('/admin/about','admin@about');
Route::post('form_submits','admin@form_submit');
// Route::get('index', function () {
//     return view('index');
// });


Route::get('home', function () {
    return view('admin/index');
});


Route::get('view', function () {
    return view('admin/view');
});

Route::get('add_employee',function(){
    return view('admin/employee_add');
});
Route::post('reg_submit','insert@reg_submit');

Route::get('employee_manage','admin@employee_manage');

Route::get('update_employee/{id}','admin@update_employee');

Route::post('emp_update','admin@emp_update');

Route::post('emp_delete','admin@emp_delete');

Route::get('attendance',function(){
    return view('admin/attendance');
});

Route::get('leave_manage',function(){
    return view('admin/leave_manage');
});

// Route::get('new',function(){
//     return view('admin/create_new');
// });

Route::get('new_project',function(){
    return view('admin/create_project');
});

Route::get('client_manage',function(){
    return view('admin/client_manage');
});

Route::get('multiselect',function(){
    return view('admin/multiselect');
});



Route::post('dep_filter','admin@dep_filter');

Route::post('pro_details','admin@pro_details');


Route::get('manage_project','admin@manage_project');

Route::get('update_project/{id}','admin@update_project');

Route::post('project_edit','admin@project_edit');


Route::post('pro_delete','admin@project_delete');
    
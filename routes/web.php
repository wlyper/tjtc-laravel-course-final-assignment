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
    return view('welcome');
});

//登陆
Route::match(['get', 'post'], 'admin/login', [App\Http\Controllers\Administrator\AdministratorController::class, 'login']);

//首页
Route::get('admin', function () {
    return view('administrator.index');
});


//学生管理
//查看所有学生
Route::get('admin/students', [\App\Http\Controllers\Administrator\StudentsController::class, 'studentsList']);
//添加学生
Route::match(['get', 'post'], 'admin/addStudents', [App\Http\Controllers\Administrator\StudentsController::class, 'addStudents']);
//编辑学生信息
Route::match(['get', 'post'], 'admin/editStudents', [App\Http\Controllers\Administrator\StudentsController::class, 'editStudents']);
//删除学生
Route::get('admin/deleteStudents', [\App\Http\Controllers\Administrator\StudentsController::class, 'deleteStudents']);

//课程管理
//查看所有课程
Route::get('admin/courses', [\App\Http\Controllers\Administrator\CoursesController::class, 'coursesList']);

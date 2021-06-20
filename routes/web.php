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

Route::get('/', function (\Illuminate\Http\Request $request) {

        return view('welcome');

});

//登陆
Route::match(['get', 'post'], 'admin/login', [App\Http\Controllers\Administrator\AdministratorController::class, 'login']);

//退出
Route::get('admin/loginout', [\App\Http\Controllers\Administrator\AdministratorController::class, 'loginout']);

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
//修改课程信息
Route::match(['get', 'post'], 'admin/editCourses', [\App\Http\Controllers\Administrator\CoursesController::class, 'editCourses']);
//删除课程
Route::get('admin/deleteCourses', [\App\Http\Controllers\Administrator\CoursesController::class, 'deleteCourses']);
//添加课程
Route::match(['get', 'post'],'admin/addCourses',[\App\Http\Controllers\Administrator\CoursesController::class,'addCourses']);


//校历查询
Route::get('admin/schoolCalendar', function (\Illuminate\Http\Request $request) {

        return view('administrator.schoolCalendar');

});

//教务公告
//查看公告
Route::get('admin/notice',[\App\Http\Controllers\Administrator\NoticeController::class,'noticeList']);
Route::match(['get','post'],'admin/addNotice',[\App\Http\Controllers\Administrator\NoticeController::class,'addNotice']);

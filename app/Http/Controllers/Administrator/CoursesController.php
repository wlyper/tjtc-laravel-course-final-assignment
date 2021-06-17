<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //列出全部学生
    public function coursesList(){
        $courses = DB::table('t_course_information')->paginate(6);
        return view('administrator.coursesList', compact('courses'));
    }
}

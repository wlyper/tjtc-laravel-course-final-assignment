<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    //列出全部学生
    public function coursesList(){
        $courses = Courses::paginate(6);
        return view('administrator.coursesList', compact('courses'));
    }
}

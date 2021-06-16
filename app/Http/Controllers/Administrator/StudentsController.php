<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function studentsList(){
        $students = DB::table('t_student_profile')->paginate(6);
        return view('administrator.studentsList', compact('students'));
    }
}

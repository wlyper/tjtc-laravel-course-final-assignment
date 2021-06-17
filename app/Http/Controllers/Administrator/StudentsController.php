<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //列出全部学生
    public function studentsList(){
        $students = DB::table('t_student_profile')->paginate(6);
        return view('administrator.studentsList', compact('students'));
    }

    //添加学生
    public function addStudents(Request $request)
    {
        //判断请求方式 如果是 get 请求，显示添加页面；
        //如果是 post 请求，添加学生
        $method = $request->method();
        if ($method == 'GET') {
            return view('administrator.addStudents');
        } else {
            $input = $request->all();
            $students = Students::create($input);
            $res = $students->save();
            if($res){
                echo "<script>alert('添加成功');location.href='/admin/students';</script>";
            }else{
                echo "<script>alert('添加失败');location.href='/admin/students';</script>";
            }
        }
    }
}

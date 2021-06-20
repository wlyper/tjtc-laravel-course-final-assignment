<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{

    //列出全部学生
    public function coursesList(Request $request)
    {
        //先要验证是否经过登录

        $account = $request->session()->get('account');

        if ($account) {
            $courses = Courses::paginate(16);
            return view('administrator.coursesList', compact('courses'));
        } else {
            echo '您未登录，请先登录:<a href="/admin/login">重新登录</a>';
        }
    }

    public function editCourses(Request $request)
    {
        //先要验证是否经过登录

        $account = $request->session()->get('account');

        if ($account) {
        if ($request->method() == 'GET') {
            $id = $request->get('id');
            $courses = Courses::find($id);
            return view('administrator.editCourses', compact('courses'));
        } else {
            $input = $request->all();

            $id = $input['id'];
            $courseName = $input['courseName'];
            $courseID = $input['courseID'];
            $courseTeacher = $input['courseTeacher'];
            $courseLocation = $input['courseLocation'];
            $courseTime = $input['courseTime'];
            $periodWeeks = $input['periodWeeks'];

            $courses = Courses::find($id);
            $courses->id = $id;
            $courses->courseName = $courseName;
            $courses->courseID = $courseID;
            $courses->courseTeacher = $courseTeacher;
            $courses->courseLocation = $courseLocation;
            $courses->courseTime = $courseTime;
            $courses->periodWeeks = $periodWeeks;
            $res = $courses->save();
            if ($res) {
                echo "<script>alert('编辑成功');location.href='/admin/courses';</script>";
            } else {
                echo "<script>alert('编辑失败');location.href='/admin/courses';</script>";
            }
        }
        }else{
            echo '您未登录，请先登录:<a href="/admin/login">重新登录</a>';
        }
    }

    public function deleteCourses(Request $request)
    {
        //先要验证是否经过登录

        $account = $request->session()->get('account');

        if ($account) {
        $id = $request->get('id');
        $courses = Courses::find($id);
        $res = $courses->delete();
        if ($res) {
            echo "<script>alert('删除成功');location.href='/admin/courses';</script>";
        } else {
            echo "<script>alert('删除失败');location.href='/admin/courses';</script>";
        }
        }else{
            echo '您未登录，请先登录:<a href="/admin/login">重新登录</a>';
        }
    }
}

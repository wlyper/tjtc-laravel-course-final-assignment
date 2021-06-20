<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{

    //列出全部
    public function coursesList(Request $request)
    {

            $courses = Courses::paginate(16);
            return view('administrator.coursesList', compact('courses'));

    }

    public function editCourses(Request $request)
    {

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

    }

    public function deleteCourses(Request $request)
    {

        $id = $request->get('id');
        $courses = Courses::find($id);
        $res = $courses->delete();
        if ($res) {
            echo "<script>alert('删除成功');location.href='/admin/courses';</script>";
        } else {
            echo "<script>alert('删除失败');location.href='/admin/courses';</script>";
        }

    }

    public function addCourses(Request $request)
    {
            //判断请求方式 如果是 get 请求，显示添加页面；
            //如果是 post 请求，添加学生
            $method = $request->method();
            if ($method == 'GET') {
                return view('administrator.addCourses');
            } else {
                $input = $request->all();
                $courses = Courses::create($input);
                $res = $courses->save();
                if ($res) {
                    echo "<script>alert('添加成功');location.href='/admin/courses';</script>";
                } else {
                    echo "<script>alert('添加失败');location.href='/admin/courses';</script>";
                }
            }

    }

}

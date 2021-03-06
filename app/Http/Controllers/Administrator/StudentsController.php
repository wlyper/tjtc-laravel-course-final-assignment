<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function studentsList(Request $request)
    {
            $students = Students::paginate(16);
            return view('administrator.studentsList', compact('students'));

    }

    public function addStudents(Request $request)
    {

            $method = $request->method();
            if ($method == 'GET') {
                return view('administrator.addStudents');
            } else {
                $input = $request->all();
                $students = Students::create($input);
                $res = $students->save();
                if ($res) {
                    echo "<script>alert('添加成功');location.href='/admin/students';</script>";
                } else {
                    echo "<script>alert('添加失败');location.href='/admin/students';</script>";
                }
            }

    }

    public function editStudents(Request $request)
    {

            if ($request->method() == 'GET') {
                $id = $request->get('id');
                $student = Students::find($id);
                return view('administrator.editStudents', compact('student'));

            } else {
                $input = $request->all();

                $id = $input['id'];
                $studentName = $input['studentName'];
                $studentID = $input['studentID'];
                $gender = $input['gender'];
                $dateOfBirth = $input['dateOfBirth'];
                $registrationDate = $input['registrationDate'];
                $major = $input['major'];
                $telephone = $input['telephone'];

                $student = Students::find($id);
                $student->id = $id;
                $student->studentName = $studentName;
                $student->studentID = $studentID;
                $student->gender = $gender;
                $student->dateOfBirth = $dateOfBirth;
                $student->registrationDate = $registrationDate;
                $student->major = $major;
                $student->telephone = $telephone;


                $res = $student->save();
                if ($res) {
                    echo "<script>alert('编辑成功');location.href='/admin/students';</script>";
                } else {
                    echo "<script>alert('编辑失败');location.href='/admin/students';</script>";
                }
            }

    }

    public function deleteStudents(Request $request)
    {

            $id = $request->get('id');
            $student = Students::find($id);
            $res = $student->delete();
            if ($res) {
                echo "<script>alert('删除成功');location.href='/admin/students';</script>";
            } else {
                echo "<script>alert('删除失败');location.href='/admin/students';</script>";
            }

    }

}

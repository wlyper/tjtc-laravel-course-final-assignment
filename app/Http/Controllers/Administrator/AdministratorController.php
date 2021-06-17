<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
    //处理教务管理人员登录
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $method = $request->method();
        if ($method == 'GET') {
            return view('administrator.login');
        } else {
            //后端进行数据有效性的自动验证
            $this->validate($request, [
                'employeeID' => 'required',
                'password' => 'required|min:3|max:8'
            ], [
                'employeeID.required' => '账号不能为空',
                'password.required' => '密码不能为空',
                'password.min' => '密码不能少于3个字符',
                'password.max' => '密码不能多于8个字符'
            ]);

            $employeeID = $request->get('employeeID');
            $password = $request->get('password');
            //dd($account);
            $res = DB::table('t_administrator_account')->where('employeeID', $employeeID)->where('password', $password)->first();
            if ($res) {
                echo '欢迎登录';
                return redirect('/admin/index');
            } else {
                echo "<script>alert('账号或者密码有错');location.href='/admin/login';</script>";
            }

        }
    return null;}
}

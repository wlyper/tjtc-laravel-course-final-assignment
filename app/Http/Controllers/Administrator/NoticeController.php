<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticeList()
    {
        $notice = Notice::paginate(16);
        return view('administrator.notice', compact('notice'));
    }

    public function addNotice(Request $request)
    {
        //先判断请求方式 get post
        $method = $request->method();
        if ($method == 'GET') {
            return view('administrator.addNotice');
        } else {
            // 1.获取图片 存储
            if ($request->hasFile('noticeImage')) {
                $noticeImage = $request->file('noticeImage');
                if ($noticeImage->isValid()) {
                    $path = 'images/notice';
                    $name = md5(microtime(true)) . '.' . $noticeImage->extension();
                    $res = $noticeImage->move($path, $name);

                    // 2.数据存储到数据库
                    $input = $request->all();
                    $input['noticeImage'] = '/images/notice/' . $name;
                    $notice = Notice::create($input);
                    $res = $notice->save();
                    if ($res) {
                        echo "<script>alert('添加成功');location.href='/admin/notice';</script>";
                    } else {
                        echo '上传失败';
                    }
                } else {
                    dd('error');
                }
            } else {
                dd('nothing uploaded');
            }


        }
    }
}

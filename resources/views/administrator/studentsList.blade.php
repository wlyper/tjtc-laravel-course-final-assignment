<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>首页</title>
</head>

<body>
<div class="container">
    <!-- 这是头部 -->
    <div class="jumbotron">
        <h1>用户管理信息系统</h1>
        <p>...</p>
    </div>
    <!-- 这是导航 -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">首页</a></li>
                <li role="presentation"><a href="#">添加用户</a></li>
                <li role="presentation"><a href="#">图书管理</a></li>
                <li role="presentation"><a href="#">留言管理</a></li>
                <li role="presentation"><a href="#">联系我们</a></li>
            </ul>
        </div>
    </div>

    <!-- 主体内容 -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>查看所有用户信息</h2>
            <table class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>姓名</td>
                    <td>学号</td>
                    <td>性别</td>
                    <td>出生日期</td>
                    <td>入学时期</td>
                    <td>专业</td>
                    <td>电话</td>
                </tr>
                @foreach($students as $stu)
                    <tr>
                        <td>{{$stu->id}}</td>
                        <td>{{$stu->studentName}}</td>
                        <td>{{$stu->studentID}}</td>
                        <td>{{$stu->gender}}</td>
                        <td>{{$stu->dateOfBirth}}</td>
                        <td>{{$stu->registrationDate}}</td>
                        <td>{{$stu->major}}</td>
                        <td>{{$stu->telephone}}</td>

{{--                        <td><a href="/admin/edituser?id={{$u->id}}"><span class="glyphicon glyphicon-edit"></span></a></td>--}}
{{--                        <td><a href="/admin/deleteuser?id={{$u->id}}"><span class="glyphicon glyphicon-trash"></span></a></td>--}}
                    </tr>
                @endforeach
            </table>
            {{$students->links()}}
        </div>
    </div>

    <!-- 底部内容 -->

</div>



</body>

</html>

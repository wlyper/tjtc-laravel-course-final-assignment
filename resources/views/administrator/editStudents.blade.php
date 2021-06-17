<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
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
            <h2>编辑用户</h2>
            <form class="form-horizontal" action="/admin/editStudents" method="post">
                <input type="hidden" name="id" value="{{$student->id}}"/>
                <div class="form-group">
                    <label for="inputStudentName" class="col-sm-2 control-label">姓名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id=inputStudentName" placeholder="姓名" name="studentName" value="{{$student->studentName}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputStudentID" class="col-sm-2 control-label">学号</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id=inputStudentID" placeholder="学号" name="studentID" value="{{$student->studentID}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputGender" class="col-sm-2 control-label">性别</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id=inputGender" placeholder="性别" name="gender" value="{{$student->gender}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDateOfBirth" class="col-sm-2 control-label">出生日期</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id=inputDateOfBirth" placeholder="出生日期" name="dateOfBirth" value="{{$student->dateOfBirth}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputRegistrationDate" class="col-sm-2 control-label">入学时间</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id=inputRegistrationDate" placeholder="入学时间" name="registrationDate" value="{{$student->registrationDate}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMajor" class="col-sm-2 control-label">专业</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id=inputMajor" placeholder="专业" name="major" value="{{$student->major}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTelephone" class="col-sm-2 control-label">手机</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id=inputTelephone" placeholder="手机" name="telephone" value="{{$student->telephone}}">
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                </div>
        </div>
        </form>
    </div>
</div>

<!-- 底部内容 -->

</div>


</body>

</html>

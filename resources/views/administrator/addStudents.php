<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->
<!--          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->
<!--    <title>首页</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<div class="container">-->
<!--    <!-- 这是头部 -->-->
<!--    <div class="py-5 text-center">-->
<!--        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">-->
<!--            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>-->
<!--            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>-->
<!--        </svg>-->
<!--<!--        <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->-->
<!--        <h2>添加学生</h2>-->
<!--<!--        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>-->-->
<!--    </div>-->
<!--    <!-- 这是导航 -->-->
<!--    <div class="row">-->
<!--        <div class="col-md-8 col-md-offset-2">-->
<!--            <ul class="nav nav-tabs">-->
<!--                <li role="presentation"><a href="#">首页</a></li>-->
<!--                <li role="presentation" class="active"><a href="#">添加用户</a></li>-->
<!--                <li role="presentation"><a href="#">图书管理</a></li>-->
<!--                <li role="presentation"><a href="#">留言管理</a></li>-->
<!--                <li role="presentation"><a href="#">联系我们</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <!-- 主体内容 -->-->
<!--    <div class="row">-->
<!--        <div class="col-md-8 col-md-offset-2">-->
<!--            <form class="form-horizontal" action="/admin/addStudents" method="post">-->
<!--                <div class="form-group">-->
<!--                    <label for="inputStudentName" class="col-sm-2 control-label">姓名</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="text" class="form-control" id=inputStudentName" placeholder="姓名"-->
<!--                               name="studentName">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputStudentID" class="col-sm-2 control-label">学号</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="text" class="form-control" id=inputStudentID" placeholder="学号" name="studentID">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputGender" class="col-sm-2 control-label">性别</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="text" class="form-control" id=inputGender" placeholder="性别" name="gender">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputDateOfBirth" class="col-sm-2 control-label">出生日期</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="text" class="form-control" id=inputDateOfBirth" placeholder="出生日期"-->
<!--                               name="dateOfBirth">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputRegistrationDate" class="col-sm-2 control-label">入学时间</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="text" class="form-control" id=inputRegistrationDate" placeholder="入学时间"-->
<!--                               name="registrationDate">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputMajor" class="col-sm-2 control-label">专业</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="text" class="form-control" id=inputMajor" placeholder="专业" name="major">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="inputTelephone" class="col-sm-2 control-label">手机</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="text" class="form-control" id=inputTelephone" placeholder="手机" name="telephone">-->
<!--                    </div>-->
<!--                </div>-->
<!--        </div>-->
<!--        <div class="col-sm-offset-2 col-sm-10">-->
<!--            <button type="submit" class="btn btn-default">提交</button>-->
<!--        </div>-->
<!--    </div>-->
<!--    </form>-->
<!--</div>-->
<!--</div>-->
<!---->
<!--<!-- 底部内容 -->-->
<!---->
<!--</div>-->
<!---->
<!---->
<!--</body>-->
<!---->
<!--</html>-->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>添加学生</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .container {
            max-width: 560px;
        }
    </style>

</head>

<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            <h2>添加学生</h2>
            <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        </div>

        <div class="">
            <h4 class="mb-3">学生信息</h4>
            <form class="needs-validation" novalidate action="/admin/addStudents" method="post">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="name" class="form-label">姓名</label>
                        <input type="text" class="form-control" id="name" placeholder="" value="" name="studentName" required>
                        <div class="invalid-feedback">
                            请输入学生姓名！
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">性别</label>
                        <select class="form-select" aria-label="Default select example"  name="gender" required>
                            <option selected></option>
                            <option value="男">男</option>
                            <option value="女">女</option>
                            <option value="其它">其它</option>
                        </select>
                        <div class="invalid-feedback">
                            请选择性别！
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="studentID" class="form-label">学号</label>
                        <input type="text" class="form-control" id="studentID" placeholder="" name="studentID" required>
                        <div class="invalid-feedback">
                            请输入学号！
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-12">
                            <label for="dateOfBirth" class="form-label">出生日期</label>
                            <input type="text" class="form-control" id="dateOfBirth" placeholder="" name="dateOfBirth" required>
                            <div class="invalid-feedback">
                                请输入出生日期！
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-12">
                            <label for="registrationDate" class="form-label">入学时间</label>
                            <input type="text" class="form-control" id="registrationDate" placeholder="" name="registrationDate" required>
                            <div class="invalid-feedback">
                                请输入入学时间！
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-12">
                            <label for="major" class="form-label">专业</label>
                            <input type="text" class="form-control" id="major" placeholder="" name="major" required>
                            <div class="invalid-feedback">
                                请输学生所读专业！
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-12">
                            <label for="telephone" class="form-label">手机</label>
                            <input type="text" class="form-control" id="telephone" placeholder="" name="telephone" required>
                            <div class="invalid-feedback">
                                请输手机号码！
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">提交</button>
            </form>
        </div>
</div>
</main>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 汪汪组</p>
</footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>修改课程信息</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

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
            <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
            <br>
            <br>
            <h2>修改课程信息</h2>
            <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        </div>

        <div class="">
            <form class="needs-validation" novalidate action="/admin/editCourses"
                  method="post">
                <input type="hidden" name="id" value="{{$courses->id}}"/>
                <div class="col-12">
                    <label for="courseName" class="form-label">课程名</label>
                    <input type="text" class="form-control" id="courseName"
                           placeholder=""
                           value="{{$courses->courseName}}" name="courseName"
                           required>
                    <div class="invalid-feedback">
                        请输入课程名！
                    </div>

                    <div class="col-12">
                        <label for="courseID" class="form-label">课程编号</label>
                        <input type="text" class="form-control" id="courseID"
                               placeholder="" value="{{$courses->courseID}}"
                               name="courseID" required>
                        <div class="invalid-feedback">
                            请输入课程编号！
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="courseTeacher" class="form-label">任课教师</label>
                        <input type="text" class="form-control" id="courseTeacher"
                               placeholder="" value="{{$courses->courseTeacher}}"
                               name="courseTeacher" required>
                        <div class="invalid-feedback">
                            请输入任课教师！
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="courseLocation" class="form-label">上课地点</label>
                        <input type="text" class="form-control" id="courseLocation"
                               placeholder="" value="{{$courses->courseLocation}}"
                               name="courseLocation" required>
                        <div class="invalid-feedback">
                            请输入上课地点！
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="courseTime" class="form-label">上课时间</label>
                        <input type="text" class="form-control" id="courseTime"
                               placeholder="" value="{{$courses->courseTime}}" name="courseTime"
                               required>
                        <div class="invalid-feedback">
                            请输上课时间！
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="periodWeeks" class="form-label">起始周次</label>
                        <input type="text" class="form-control" id="periodWeeks"
                               placeholder="" value="{{$courses->periodWeeks}}"
                               name="periodWeeks" required>
                        <div class="invalid-feedback">
                            请输起始周次！
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">提交</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 汪汪组</p>
    </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
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


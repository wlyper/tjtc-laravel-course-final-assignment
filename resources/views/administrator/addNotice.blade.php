<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>添加公告</title>


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
            <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>
            <br>
            <br>
            <h2>添加公告</h2>
            <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        </div>

        <div class="">
            <form class="needs-validation" novalidate action="/admin/addNotice"
                  method="post" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="courseName" class="form-label">标题</label>
                    <input type="text" class="form-control" id="noticeTitle"
                           placeholder="" name="noticeTitle"
                           required>
                    <div class="invalid-feedback">
                        请输入标题！
                    </div>

                    <div class="col-12">
                        <label for="courseID" class="form-label">正文</label>
                        <input type="text" class="form-control" id="courseID"
                               placeholder=""
                               name="noticeContent" required>
                        <div class="invalid-feedback">
                            请输入正文！
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="courseTeacher" class="form-label">通知编号</label>
                        <input type="text" class="form-control" id="courseTeacher"
                               placeholder=""
                               name="noticeID" required>
                        <div class="invalid-feedback">
                            请输入通知编号！
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="noticeImage" class="form-label">公告图片</label>
                        <input type="file" class="form-control" id="noticeImage"
                               placeholder="noticeImage"
                               name="noticeImage" required>
                        <div class="invalid-feedback">
                            请上传图片！
                        </div>
                    </div>

                    <hr class="my-4">
                    @csrf
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


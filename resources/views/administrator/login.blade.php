<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">


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

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        #sign-in-btn{
            background-color: #1a202c;
        }

        #foot-background{
            position:fixed;
            bottom:0px;
        }
    </style>

</head>
<body class="text-center">

<main class="form-signin">
    <form action="/admin/login" method="post">
        <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor"
                 class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                <path
                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
            </svg>
        </div>
        <h1 class="h3 mb-3 fw-normal">教务管理人员登陆</h1>
        <br>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="employeeID">
            <label for="floatingInput">工号</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">密码</label>
        </div>
        @csrf
        <hr>
        <button id="sign-in-btn" class="w-100 btn btn-lg btn-primary" type="submit">登陆</button>
        <p class="mt-5 mb-3 text-muted">&copy; 汪汪组</p>
        <br>
        <br>
    </form>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>
                        {{$e}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</main>

<img src="https://assets.website-files.com/5e51b3b0337309d672efd94c/5e51cc5933d368febc351897_footer-img.svg" alt="" id="foot-background">
</body>
</html>

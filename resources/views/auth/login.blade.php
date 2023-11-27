<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url("images/Login/background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* Ensures the background image is not repeated */
            color: #fff;
            height: 100vh;
            /* Ensures the background covers the entire viewport height */
            margin: 0;
            /* Remove default margin */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background-color: #fff;
            /* Adding a semi-transparent black overlay */
            border-radius: 10px;
            margin-top: 100px;
            padding: 20px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            color: black;

        }

        .login-box h1 {
            font-size: 18px;
        }

        .login-box h2 {
            font-size: 15px;
            padding-bottom: 10px;

        }

        .login-box form {
            margin-bottom: 10px;
        }

        .login-box a {
            color: #fff;
        }

        .input-group-prepend span {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 0 10px 10px 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .d-flex a {
            color: black;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="login-box text-center">
            <img class="img-fluid" src="images/Login/Logo.png" alt="Logo">
            <h1>PROFILING AND MONITORING SYSTEM</h1>
            <h2>Reception and Study Center for Children (RSCC)</h2>
            @if(Session::has('success'))
            <div class="alert alert-success"> {{Session::get('success') }} </div>
            @endif
            @include('layouts._message')
            <form method="post" action="{{url('login')}}">
                @csrf
                <div class="mb-3 input-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"></span>

                </div>

                <div class="mb-3 input-group">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                        aria-describedby="basic-addon2" name="password">
                    <span class="input-group-text" id="basic-addon2"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
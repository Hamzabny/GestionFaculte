<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>Document</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .signup-form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signup-form h1 {
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
        }

        .signup-form .btn-close {
            margin-top: -10px;
            color: #000;
        }

        .signup-form form {
            margin-top: 15px;
        }

        .signup-form .form-floating {
            margin-bottom: 15px;
        }

        .signup-form .form-control {
            border-radius: 10px;
            box-shadow: none;
        }

        .signup-form .btn-primary {
            border-radius: 10px;
            padding: 12px;
        }

        .signup-form small {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>
<body>
<a class="nav-link" href="{{ route('registrationStudent') }}"><button class="btn btn-dark">Register</button></a>
    <div class="signup-form">
        <div class="container" role="document">
            <div>
                <div class="row justify-content-center">
                    <h1 class="card-header text-center">Login</h1>

                </div>

                <div class="modal-body p-4 pt-0">
                    <form method="POST" action="{{ route('postloginStudent') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email" autofocus>
                            <label for="floatingInput">Email address</label>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="d-grid mx-auto">
                        <button class="btn btn-dark btn-block"type="submit">Sign In</button>
                        </div>
                        <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

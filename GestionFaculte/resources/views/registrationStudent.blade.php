<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            margin-top:100px;
            align-items: center;
            justify-content: center;
        }

        .signup-form .card {
            border-radius: 10px;
        }

        .signup-form .card-header {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
            text-align: center;
        }

        .signup-form .form-group {
            margin-bottom: 1.5rem;
        }

        .signup-form .form-control {
            border-radius: 10px;
        }

        .signup-form .btn-block {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Register Student</h3>
                        <div class="card-body">
                            <form action="{{ route('students.signup.submit') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="nom" autofocus>
                                    @if ($errors->has('nom'))
                                    <span class="text-danger">{{ $errors->first('nom') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Last Name" id="lastname" class="form-control" name="prenom" autofocus>
                                    @if ($errors->has('prenom'))
                                    <span class="text-danger">{{ $errors->first('prenom') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="date" placeholder="Date of Birth" id="dob" class="form-control" name="datedenaissance">
                                    @if ($errors->has('datedenaissance'))
                                    <span class="text-danger">{{ $errors->first('datedenaissance') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

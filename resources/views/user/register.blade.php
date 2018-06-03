<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@if($page){{ $page }}@endif | E-Voucher</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                <div class="info d-flex align-items-center">
                    <div class="content">
                    <div class="logo">
                        <h1>E-Voucher</h1>
                    </div>
                    <p>Create A New Account</p>
                    </div>
                </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                <div class="form d-flex align-items-center">
                    <div class="content">



                    <form class="form-validate" method="POST" action="/register">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                            <label for="register-email" class="label-material">Email Address      </label>
                        </div>
                        <div class="form-group">
                            <input id="register-name" type="text" name="name" required data-msg="Please enter a valid name" class="input-material">
                            <label for="register-name" class="label-material">Full Name</label>
                        </div>

                        @if($errors->has('email'))
                            <div id="login-email-error" class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('email') }}</div>
                        @endif

                        <div class="form-group">
                            <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                            <label for="register-password" class="label-material">password </label>
                        </div>
                        @if($errors->has('password'))
                            <div id="login-password-error" class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('password') }}</div>
                        @endif
                        <div class="form-group">
                            <input id="confirm-password" type="password" name="password_confirmation" required data-msg="Please enter your password" class="input-material">
                            <label for="confirm-password" class="label-material">Confirm password</label>
                        </div>
                        <div class="form-group">
                            {{-- <label for="register-role" class="label-material">Pick a Role</label> --}}
                            <div class="form-group">
                                <input type="radio" name="role" id="" value="administrator">Admin
                                <input type="radio" name="role" id="" value="accountant">Accountant
                                <input type="radio" name="role" id="" value="assistant">Assistant
                            </div>
                        </div>

                        @if($errors->has('role'))
                            <div id="login-role-error" class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('role') }}</div>
                        @endif

                        <div class="form-group">
                            <button id="register" type="submit" name="registerSubmit" class="btn btn-primary">Register</button>
                        </div>
                    </form><small>Already have an account? </small><a href="{{ route('login') }}" class="signup">Login</a>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </p>
        </div>
        </div>
    <!-- JavaScript files-->
    <script src="/js/app.js"></script>
    <script src="/js/jquery.cookie.js"> </script>
    <script src="/js/Chart.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="/js/front.js"></script>
</body>
</html>

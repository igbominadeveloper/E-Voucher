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
                    <img src="{{ asset('img/NCS.png') }}" alt="LOGO is here">
                    <h1>E-Voucher Login</h1>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate" action="/login">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input id="login-email" type="email" name="email" required data-msg="Please enter your email address" class="input-material">
                      <label for="login-email" class="label-material">Email Address</label>
                        @if($errors->has('email'))
                            <div id="login-email-error" class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                     @if($errors->has('password'))
                        <div id="login-password-error" class="is-invalid invalid-feedback" style="display: block;">{{ $errors->first('password') }}</div>
                    @endif
                    <button id="login" class="btn btn-primary">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="{{ url('/register') }}" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="http://bootstrapious.com/admin-templates" class="external">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
          <p>All rights reserved</p> <span class="pull-right">Digify spaces (c) 2018</span>
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


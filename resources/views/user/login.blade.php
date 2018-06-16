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
    <style>
        .display{
            display: block !important;
        }
    </style>
</head>
<body>
<div class="page login-page" id="app">
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
                  {{--<div class="logo">--}}
                      {{--<img src="{{ asset('img/NCS.png') }}" alt="LOGO is here">--}}
                      {{--<h1>E-Voucher Login</h1>--}}
                  {{--</div>--}}
                  <div class="content">
                      <app-login></app-login>
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

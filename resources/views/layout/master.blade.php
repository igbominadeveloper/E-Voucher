<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $page ? $page:'' }} | E-Voucher</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">

        <link rel="stylesheet" href="/css/app.css">

        <link rel="stylesheet" href="/css/all.css">
        <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <div class="page" id="app">
      <!-- Main Navbar-->
    @include('layout.partials.header')
      <div class="page-content d-flex align-items-stretch">
       <!-- Side Navbar -->
        <app-sidebar></app-sidebar>
          <div class="content-inner">
            @yield('content')
          @include('layout.partials.footer')
          </div>
         </div>
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

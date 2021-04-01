<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('back/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/css/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/css/adminlte.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url("/") }}">{{ config('app.name', 'Laravel') }}</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            @yield('content')
        </div>
    </div>
</div>
<script src="{{ asset('back/js/jquery.min.js') }}"></script>
<script src="{{ asset('back/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('back/js/adminlte.min.js') }}"></script>
</body>
</html>

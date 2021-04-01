<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset("back/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("back/css/adminlte.css") }}">
    <link rel="stylesheet" href="{{ asset("back/css/font-awesome.min.css") }}">
    @yield("custom-css")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include("admin.section.navbar")
    @include("admin.section.sidebar")
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                @yield("content")
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 by Valery.</strong>
        All rights reserved.
    </footer>
    @include("admin.section.modal-logout")
</div>
<script src="{{ asset("back/js/jquery.min.js") }}"></script>
<script src="{{ asset("back/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("back/js/adminlte.js") }}"></script>
<script src="{{ asset("back/js/fontawesome.min.js") }}"></script>
@yield("custom-js")
</body>
</html>

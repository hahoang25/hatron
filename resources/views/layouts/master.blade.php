<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=vietnamese" rel="stylesheet">
    <link href="{{ asset('assets/css/imports.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css.map') }}" rel="stylesheet">
</head><!--/head-->

<body>
<!--/header-->
@include("layouts.elements.top")
<section>
    <div class="container">
        @yield('content')
    </div>
</section>
@include("layouts.elements.footer")
<!--/Footer-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/style.js') }}"></script>
</body>
</html>
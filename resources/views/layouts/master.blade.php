<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog - Zent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/slippry.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/style.css') }}">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
    @yield('header_css')
</head>

<body>
<!-- *****************************************************************
** Preloader *********************************************************
****************************************************************** -->
<div id="preloader-container">
    <div id="preloader-wrap">
        <div id="preloader"></div>
    </div>
</div>
<!-- *****************************************************************
** Header ************************************************************
****************************************************************** -->
@include('layouts/header')
<!-- #HEADER -->
<!-- *****************************************************************
** Section ***********************************************************
****************************************************************** -->
<section class="tada-container content-posts">
    @yield('content')
</section>
<!-- *****************************************************************
** Footer ************************************************************
****************************************************************** -->

@include('layouts/footer')
<!-- *****************************************************************
** Script ************************************************************
****************************************************************** -->
@include('layouts/bottom_js')

</body>

</html>

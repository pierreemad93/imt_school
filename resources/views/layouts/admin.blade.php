<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>@yield('title') | Adminpanel</title>
    <!-- start: META -->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <!-- end: GOOGLE FONTS -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/themify-icons/themify-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/animate.css/animate.min.css')}}"  media="screen">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css')}}"  media="screen">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/switchery/switchery.min.css')}}"  media="screen">
    <!-- end: MAIN CSS -->
    <!-- start: CLIP-TWO CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/themes/theme-1.css')}}" id="skin_color" />
    @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        <link rel="stylesheet" href="{{asset('assets/admin/assets/css/rtl.css')}}">
    @endif
    <!-- end: CLIP-TWO CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>
<!-- end: HEAD -->
<body>
<div id="app">
    <!-- sidebar -->
    @include('admin.includes.sidebar')
    <!-- / sidebar -->
    <div class="app-content">
        <!-- start: TOP NAVBAR -->
        @include('admin.includes.navbar')
        <!-- end: TOP NAVBAR -->
        <div class="main-content" >
            @yield('content')
        </div>
    </div>
    <!-- start: FOOTER -->
    @include('admin.includes.footer')
    <!-- end: FOOTER -->
    <!-- start: OFF-SIDEBAR -->
    @include('admin.includes.off-sidebar')
    <!-- end: OFF-SIDEBAR -->
    <!-- start: SETTINGS -->
    @include('admin.includes.settings')
    <!-- end: SETTINGS -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/modernizr/modernizr.js')}}"></script>
<script src="{{asset('assets/admin/vendor/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/switchery/switchery.min.js')}}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{asset('assets/admin/vendor/Chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="{{asset('assets/admin/assets/js/main.js')}}"></script>
<!-- start: JavaScript Event Handlers for this page -->
<script src="{{asset('assets/admin/assets/js/index.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        Index.init();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
</html>

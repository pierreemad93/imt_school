<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMT School</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        <link rel="stylesheet" href="{{asset('assets/front/css/rtl-theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/rtl-theme-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/rtl-theme-blog.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/rtl-theme-shop.css')}}">
        @else
        <link rel="stylesheet" href="{{asset('assets/front/css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/theme-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/theme-blog.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/theme-shop.css')}}">
    @endif

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/rs-plugin/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/circle-flip-slideshow/css/component.css')}}">

    <!-- Demo CSS -->
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/skins/default.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/custom.css')}}">
    <!-- Head Libs -->
    <script src="{{asset('assets/front/vendor/modernizr/modernizr.min.js')}}"></script>

</head>
{{-- dir="{{(LaravelLocalization::getCurrentLocaleDirection('ar')  ? 'rtl' : 'ltr')}}" --}}
<body>
<div class="body">
   {{--Start header--}}
    @include('front.includes.header')
   {{--End header--}}
    {{--Start Content--}}
    <div role="main" class="main">
        @yield('content')
    </div>
    {{--End Content--}}
    {{--Start footer--}}
    @include('front.includes.footer')
    {{--Emd footer--}}

</div>

<!-- Vendor -->
<script src="{{asset('assets/front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/common/common.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/vide/jquery.vide.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/vivus/vivus.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/front/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('assets/front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
<script src="{{asset('assets/front/js/views/view.home.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/front/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/front/js/theme.init.js')}}"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>
</html>

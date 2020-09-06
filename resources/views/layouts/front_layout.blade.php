<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <style>
        .signup-form{
            position: relative;
            left: 232px;
        }
        .login-form {
            position: relative;
            left: 343px;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/front_images/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('css/front_css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('css/front_css/style.css')}}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    @include('Student.includes.front_header')


    <!-- header-end -->
@yield('content')
    <!-- slider_area_start -->

  @yield('request')  <!-- footer start -->
    @include('Student.includes.front_footer')

    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{url('js/front_js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{url('js/front_js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('js/front_js/popper.min.js')}}"></script>
    <script src="{{url('js/front_js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/front_js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/front_js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('js/front_js/ajax-form.js')}}"></script>
    <script src="{{url('js/front_js/waypoints.min.js')}}"></script>
    <script src="{{url('js/front_js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('js/front_js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('js/front_js/scrollIt.js')}}"></script>
    <script src="{{url('js/front_js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{url('js/front_js/wow.min.js')}}"></script>
    <script src="{{url('js/front_js/nice-select.min.js')}}"></script>
    <script src="{{url('js/front_js/jquery.slicknav.min.js')}}"></script>
    <script src="{{url('js/front_js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/front_js/plugins.js')}}"></script>
    <script src="{{url('js/front_js/gijgo.min.js')}}"></script>



    <!--contact js-->
    <script src="{{url('js/front_js/contact.js')}}"></script>
    <script src="{{url('js/front_js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('js/front_js/jquery.form.js')}}"></script>
    <script src="{{url('js/front_js/jquery.validate.min.js')}}"></script>
    <script src="{{url('js/front_js/mail-script.js')}}"></script>


    <script src="{{url('js/front_js/main.js')}}"></script>
</body>

</html>

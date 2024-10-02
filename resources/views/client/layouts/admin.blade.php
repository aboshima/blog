<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content=" Eudica - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="html rtl, html dir rtl, rtl website template, bootstrap 4 rtl template, rtl bootstrap template, admin panel template rtl, admin panel rtl, html5 rtl, academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website" />
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/images/brand/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/brand/favicon.ico') }}" />
    <!-- Title -->
    <title> Blog</title>
    <!-- Bootstrap css -->
    <link href="{{ asset('client/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Style css -->
    <link href="{{ asset('client/css/skin-modes.css') }}" rel="stylesheet" />
    <!-- Font-awesome  css -->
    <link href="{{ asset('client/css/icons.css') }}" rel="stylesheet" />
    {{-- ===================== Replace Local RTL ===================== --}}
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link href="{{ asset('client/css/style-rtl.css') }}" rel="stylesheet" />
        <link href="{{ asset('client/plugins/horizontal-menu/horizontal-menu-rtl.css') }}" rel="stylesheet" />
        <link href="{{ asset('client/plugins/select2/select2.min-rtl.css') }}" rel="stylesheet" />
        <link href="{{ asset('client/switcher/css/switcher-rtl.css') }}" rel="stylesheet" id="switcher-css"
            type="text/css" media="all" />
        <link href="{{ asset('client/plugins/sidemenu/sidemenu-rtl.css') }}" rel="stylesheet" />
    @else
        <link href="{{ asset('client/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('client/plugins/horizontal-menu/horizontal-menu.css') }}" rel="stylesheet" />
        <link href="{{ asset('client/plugins/select2/select2.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('client/switcher/css/switcher.css') }}" rel="stylesheet" id="switcher-css" type="text/css"
            media="all" />
        <link href="{{ asset('client/plugins/sidemenu/sidemenu.css') }}" rel="stylesheet" />
    @endif
    {{-- ===================== End Replace Local RTL ===================== --}}
    <!-- Cookie css -->
    {{-- <link href="{{ asset('client/plugins/cookie/cookie.css') }}" rel="stylesheet"> --}}
    <!-- Owl Theme css-->
    <link href="{{ asset('client/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <!-- Custom scroll bar css-->
    <link href="{{ asset('client/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <!-- Pscroll bar css-->
    <link href="{{ asset('client/plugins/pscrollbar/pscrollbar.css') }}" rel="stylesheet" />
    <!-- Color Skin css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('client/color-skins/color6.css') }}" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('client/css/custom_slide.css') }}" rel="stylesheet" />


    <!-- ==========  Google Fonts ========== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Aref+Ruqaa:wght@400;700&family=Cairo:wght@200..1000&family=Changa:wght@200..800&family=Comfortaa:wght@300..700&family=Gulzar&family=Handlee&family=Lateef:wght@200;300;400;500;600;700;800&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Kufi+Arabic:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tajawal:wght@200;300;400;500;700;800;900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- ========== End Google Fonts ========== -->

</head>

<body class="rtl-demo">
    @include('client.includes.navbar')

    @include('client.includes.content')

    @include('client.includes.footer')


    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- JQuery js-->
    <script src="{{ asset('client/js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('client/plugins/bootstrap-4.3.1/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/plugins/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>

    <!--JQuery IT Coursesrkline js-->
    <script src="{{ asset('client/js/jquery.sparkline.min.js') }}"></script>

    <!-- Circle Progress js-->
    <script src="{{ asset('client/js/circle-progress.min.js') }}"></script>

    <!-- Star Rating js-->
    <script src="{{ asset('client/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Horizontal Menu js-->
    <script src="{{ asset('client/plugins/horizontal-menu/horizontal-menu.js') }}"></script>

    <!--Owl Carousel js -->
    <script src="{{ asset('client/plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{ asset('client/js/jquery.touchSwipe.min.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('client/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('client/js/select2.js') }}"></script>

    <!-- Cookie js -->
    {{-- <script src="{{asset('client/plugins/cookie/jquery.ihavecookies.js')}}"></script>
		<script src="{{asset('client/plugins/cookie/cookie.js')}}"></script> --}}

    <!-- Custom scroll bar js-->
    <script src="{{ asset('client/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- sticky js-->
    <script src="{{ asset('client/js/sticky.js') }}"></script>

    <!-- Pscrollbar js -->
    <script src="{{ asset('client/plugins/pscrollbar/pscrollbar.js') }}"></script>
    <script src="{{ asset('client/plugins/pscrollbar/pscroll.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('client/switcher/js/switcher-rtl.js') }}"></script>

    <!-- Vertical scroll bar js-->
    <script src="{{ asset('client/plugins/vertical-scroll/jquery.bootstrap.newsbox.js') }}"></script>
    <script src="{{ asset('client/plugins/vertical-scroll/vertical-scroll.js') }}"></script>

    <!-- Swipe js-->
    <script src="{{ asset('client/js/swipe.js') }}"></script>

    <!-- Scripts js-->
    <script src="{{ asset('client/js/owl-carousel-rtl.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('client/js/custom.js') }}"></script>

</body>

</html>

<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Eudica - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="html rtl, html dir rtl, rtl website template, bootstrap 4 rtl template, rtl bootstrap template, admin panel template rtl, admin panel rtl, html5 rtl, academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/brand/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/brand/favicon.ico') }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">


    <!-- Title -->
    <title> @yield('title') </title>

    <!-- Bootstrap css -->
    <link href="{{ asset('admin/assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet" />

    {{-- ===================== Replace Local RTL ===================== --}}
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link href="{{ asset('admin/assets/plugins/sidemenu/sidemenu-rtl.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/assets/css/style-rtl.css') }}" rel="stylesheet" />
    @else
        <link href="{{ asset('admin/assets/plugins/sidemenu/sidemenu.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" />
    @endif
    {{-- ===================== End Replace Local RTL ===================== --}}

    <link href="{{ asset('admin/assets/css/admin-custom.css') }}" rel="stylesheet" />
    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('admin/assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />
    <!-- Custom scroll bar css-->
    <link href="{{ asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <!---Font icons-->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" />
    <!-- Switcher css -->
    <link href="{{ asset('admin/assets/switcher/css/switcher-rtl.css') }}" rel="stylesheet" id="switcher-css"
        type="text/css" media="all" />
    <!-- Color Skin css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('admin/assets/color-skins/color6.css') }}" />
    <!-- file Uploads -->
    <link href="{{ asset('admin/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!-- ========== Google Fonts ========== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family= Almarai&family=Aref+Ruqaa&family=Cairo:wght@500;700&family=Changa&family=IBM+Plex+Sans+Arabic&family=Lateef&family=Markazi+Text&family=Noto+Sans&family=Nunito+Sans:opsz@6..12&family=Open+Sans&family=Playfair+Display:wght@400;600&family=Tajawal:wght@500&family=Work+Sans&family=Zilla+Slab:ital,wght@0,300;1,400&display=swap"
        rel="stylesheet">
    <!-- ========== End Google Fonts ========== -->

    {{-- إستدعاء من صفحة Add_post --}}
    @stack('tiny_js')

</head>

<body class="app sidebar-mini" style="font-family: cairo;">
    <!--Loader-->
    <div id="global-loader">
        <img src="{{ asset('admin/assets/images/loader.svg') }}" class="loader-img" alt="">
    </div>
    <!--/Loader-->

    <!--Page-->
    <div class="page">
        <div class="page-main h-100">

            <!--App-Header-->
            @include('admin.includes.header')
            <!--/App-Header-->

            <!-- Sidebar menu-->
            @include('admin.includes.sidebar')
            <!-- /Sidebar menu-->

            <!--App-Content-->
            @include('admin.includes.content')
        </div>

        {{-- ------------------------ Footer ------------------------ --}}
        @include('admin.includes.footer')
        {{-- ------------------------ End Footer ------------------------ --}}
    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
    {{-- ======================================= Scripts ======================================= --}}
    <!-- JQuery js-->
    <script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-4.3.1/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>

    <!--JQuery Sparkline Js-->
    <script src="{{ asset('admin/assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Circle Progress Js-->
    <script src="{{ asset('admin/assets/js/circle-progress.min.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('admin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!-- Fullside-menu Js-->
    <script src="{{ asset('admin/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('admin/assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- Timepicker js -->
    <script src="{{ asset('admin/assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/time-picker/toggles.min.js') }}"></script>

    <!-- Datepicker js -->
    <script src="{{ asset('admin/assets/plugins/date-picker/spectrum.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

    <!-- Inline js -->
    <script src="{{ asset('admin/assets/js/select2.js') }}"></script>
    <script src="{{ asset('admin/assets/js/formelements.js') }}"></script>

    <!-- file uploads js -->
    <script src="{{ asset('admin/assets/plugins/fileuploads/js/fileupload.js') }}"></script>

    <!--InputMask Js-->
    <script src="{{ asset('admin/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') }}"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{ asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!--Counters -->
    <script src="{{ asset('admin/assets/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/counters/waypoints.min.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('admin/assets/js/admin-custom.js') }}"></script>




    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 100
        });
    </script>


    @yield('script')
    <script>
        $(function() {
            $('#hide').fadeOut(3000);
            $('#hide').show(.500);
            $('#hide').fadeOut(1000);
        });
    </script>

</body>

</html>

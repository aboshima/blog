@extends('admin.layout.master')
@section('title')
    documentation
@endsection
@section('content')
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Documentation</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Documentation</li>
            </ol>
        </div>

        <!--Introduction-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Introduction</h3>
                    </div>
                    <div class="card-body">
                        <div class="doc-intro fs-16">
                            <p class="">التوثيق ، تجربة رائعة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Introduction-->

        <!--File Structure-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">File Structure</h3>
                    </div>
                    <div class="card-body">
                        <div class="doc-structure fs-16">
                            <pre class="prettyprint mb-0"><span class="path">HTML</span><span class="tree"> ──</span><span class="path">
</span><span class="tree">├──</span><span class="path"> assets</span><span class="tree"></span><span class="path">
</span><span class="tree"></span><span class="path">   </span><span class="tree">├──</span><span class="path"> color-skins
</span><span class="tree"></span><span class="path">   </span><span class="tree">├──</span><span class="path"> css
</span><span class="tree"></span><span class="path">   </span><span class="tree">├──</span><span class="path"> iconfonts
</span><span class="tree"></span><span class="path">   </span><span class="tree">├──</span><span class="path"> images
</span><span class="tree"></span><span class="path">   </span><span class="tree">├──</span><span class="path"> js
</span><span class="tree"></span><span class="path">   </span><span class="tree">├──</span><span class="path"> plugins
</span><span class="tree"></span><span class="path">   </span><span class="tree">├──</span><span class="path"> video
    </span>
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/File Structure-->
        <!--Page Structure-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Page Structure</h3>
                    </div>
                    <div class="card-body">
                        <div class="doc-img">
                            <img src="../assets/images/png/html.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Page Structure-->
        <!--Page Structure-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Clean Code Structure</h3>
                    </div>
                    <div class="card-body">
                        <div class="doc-img">
                            <img src="../assets/images/png/code1.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Page Structure-->
        <!--Credits-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Credits</h3>
                    </div>
                    <div class="card-body">
                        <div class="doc-credits">
                            <ul class="mb-0">
                                <li class="fs-16 text-dark">Bootstrap FrameWork</li>
                                <li class="fs-16 text-primary"><a href="https://getbootstrap.com/"
                                        class="text-primary">https://getbootstrap.com/</a></li>
                                <li class="fs-16 text-dark">Jquery
                                <li>
                                <li class="fs-16 text-primary"><a href="https://jquery.com/"
                                        class="text-primary">https://jquery.com/</a></li>
                                <li class="fs-16 text-dark">Jquery Datepicker
                                <li>
                                <li class="fs-16 text-primary"><a href="https://jqueryui.com/datepicker/"
                                        class="text-primary">https://jqueryui.com/datepicker/</a></li>
                                <li class="fs-16 text-dark">Full Calendar
                                <li>
                                <li class="fs-16 text-primary"><a href="https://fullcalendar.io/"
                                        class="text-primary">https://fullcalendar.io/</a></li>
                                <li class="fs-16 text-dark">File Uploads
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="https://www.jqueryscript.net/demo/jQuery-Plugin-To-Beautify-File-Inputs-with-Custom-Styles-Dropify/"
                                        class="text-primary">https://www.jqueryscript.net/demo/jQuery-Plugin-To-Beautify-File-Inputs-with-Custom-Styles-Dropify/</a>
                                </li>
                                <li class="fs-16 text-dark">mcustomScrollbar
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="http://manos.malihu.gr/jquery-custom-content-scroller/"
                                        class="text-primary">http://manos.malihu.gr/jquery-custom-content-scroller/</a>
                                </li>
                                <li class="fs-16 text-dark">Chat
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="https://www.jqueryscript.net/form/Create-Live-Chat-Bot-From-Html-Form-convForm.html"
                                        class="text-primary">https://www.jqueryscript.net/form/Create-Live-Chat-Bot-From-Html-Form-convForm.html</a>
                                </li>
                                <li class="fs-16 text-dark">Select2
                                <li>
                                <li class="fs-16 text-primary"><a href="https://select2.org/"
                                        class="text-primary">https://select2.org/</a></li>
                                <li class="fs-16 text-dark">Jquery Timepicker
                                <li>
                                <li class="fs-16 text-primary"><a href="https://jonthornton.github.io/jquery-timepicker/"
                                        class="text-primary">https://jonthornton.github.io/jquery-timepicker/</a>
                                </li>
                                <li class="fs-16 text-dark">Bootstrap-wizard
                                <li>
                                <li class="fs-16 text-primary"><a href="http://vinceg.github.io/twitter-bootstrap-wizard/"
                                        class="text-primary">http://vinceg.github.io/twitter-bootstrap-wizard/</a>
                                </li>
                                <li class="fs-16 text-dark">Wysiwyag Editor(form editor)
                                <li>
                                <li class="fs-16 text-primary"><a href="https://www.froala.com/wysiwyg-editor"
                                        class="text-primary">https://www.froala.com/wysiwyg-editor</a></li>
                                <li class="fs-16 text-dark">Datatable
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="https://datatables.net/examples/styling/bootstrap4"
                                        class="text-primary">https://datatables.net/examples/styling/bootstrap4</a>
                                </li>
                                <li class="fs-16 text-dark">Google Maps
                                <li>
                                <li class="fs-16 text-primary"><a href="https://tilotiti.github.io/jQuery-Google-Map/"
                                        class="text-primary">https://tilotiti.github.io/jQuery-Google-Map/</a>
                                </li>
                                <li class="fs-16 text-dark">Font Awesome Icons
                                <li>
                                <li class="fs-16 text-primary"><a href="https://fontawesome.com/"
                                        class="text-primary">https://fontawesome.com/</a></li>
                                <li class="fs-16 text-dark">Material Design Icons
                                <li>
                                <li class="fs-16 text-primary"><a href="https://materialdesignicons.com/"
                                        class="text-primary">https://materialdesignicons.com/</a></li>
                                <li class="fs-16 text-dark">Simpleline Icons
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="https://iconify.design/icon-sets/simple-line-icons/"
                                        class="text-primary">https://iconify.design/icon-sets/simple-line-icons/</a>
                                </li>
                                <li class="fs-16 text-dark">Ionicons
                                <li>
                                <li class="fs-16 text-primary"><a href="https://ionicons.com/"
                                        class="text-primary">https://ionicons.com/</a></li>
                                <li class="fs-16 text-dark">Themify Icons
                                <li>
                                <li class="fs-16 text-primary"><a href="https://themify.me/themify-icons"
                                        class="text-primary">https://themify.me/themify-icons</a></li>
                                <li class="fs-16 text-dark">Owl-carousel
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="https://owlcarousel2.github.io/OwlCarousel2/demos/demos.html"
                                        class="text-primary">https://owlcarousel2.github.io/OwlCarousel2/demos/demos.html</a>
                                </li>
                                <li class="fs-16 text-dark">Bootstrap-Colorpicker
                                <li>
                                <li class="fs-16 text-primary"><a href="https://farbelous.io/bootstrap-colorpicker/v2/"
                                        class="text-primary">https://farbelous.io/bootstrap-colorpicker/v2/</a>
                                </li>
                                <li class="fs-16 text-dark">Sparkline Charts
                                <li>
                                <li class="fs-16 text-primary"><a href="https://omnipotent.net/jquery.sparkline/#s-about"
                                        class="text-primary">https://omnipotent.net/jquery.sparkline/#s-about</a>
                                </li>
                                <li class="fs-16 text-dark">Gallery Zoom
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="https://www.jqueryscript.net/gallery/jQuery-Plugin-For-Product-Viewer-with-Image-Hover-Zoom-BZoom.html"
                                        class="text-primary">https://www.jqueryscript.net/gallery/jQuery-Plugin-For-Product-Viewer-with-Image-Hover-Zoom-BZoom.html</a>
                                </li>
                                <li class="fs-16 text-dark">Vertical Scrollbar
                                <li>
                                <li class="fs-16 text-primary"><a
                                        href="https://www.jqueryscript.net/slider/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box.html"
                                        class="text-primary">https://www.jqueryscript.net/slider/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box.html</a>
                                </li>
                                <li class="fs-16 text-dark">Morris Chart
                                <li>
                                <li class="fs-16 text-primary"><a href="https://morrisjs.github.io/morris.js/"
                                        class="text-primary">https://morrisjs.github.io/morris.js/</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Credits-->
    </div>
@endsection

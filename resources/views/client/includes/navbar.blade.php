    <!--Loader-->
    <div id="global-loader">
        <img src="{{ asset('client/images/loader.svg') }}" class="loader-img" alt="img">
    </div><!--/Loader-->

    <!--Section-->
    <div class="cover-image bg-background3" data-image-src="{{ asset('client/images/banners/banner2.jpg') }}"
        style="font-family: cairo;">
        <!--Topbar-->
        <div class="header-main">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                            @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                <div class="top-bar-right d-flex">
                                </div>
                            @else
                                <div class="top-bar-left d-flex">
                                </div>
                            @endif
                        </div>
                    </div>
                </div><!--/Topbar-->

                <!-- Mobile Header -->
                <div class="sticky">
                    <div class="horizontal-header clearfix">
                        <div class="container">
                            <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                            <span class="smllogo">
                                {{-- <img src="{{ asset('client/images/logo.png') }}" width="40%"
                                    alt="img" /> --}}
                                <i class="fa fa-globe fa-spin text-6xl"></i>

                            </span>
                            <span class="smllogo-white">
                                {{-- <img src="{{ asset('admin/images/brand/logo.png') }}"
                                    width="120" alt="img" /> --}}
                                <i class="fa fa-globe fa-spin text-6xl"></i>

                            </span>
                            <a href="tel:00967777922933" class="callusbtn"><i class="fa fa-phone"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Mobile Header -->

                <!--Horizontal-main -->
                <div class="header-style horizontal-main bg-dark-transparent clearfix">
                    <div class="horizontal-mainwrapper clearfix container">
                        <nav class="horizontalMenu clearfix d-md-flex">
                            <ul class="horizontalMenu-list">

                                <li aria-haspopup="true"><a href="{{ route('home') }}">الرئيسية </a></li>
                                <li aria-haspopup="true"><a href="{{ route('about') }}">عن الموقع </a></li>
                                <li aria-haspopup="true" class="li-list"><a href="{{ url('contact_us') }}"> الإتصال
                                        بنا</a></li>
                                <li>
                                    <a href="{{ route('dashboard') }}" class="">
                                        <i class="fa fa-sign-in ml-1"></i>
                                        <span>دخول</span></a>
                                </li>
                            </ul>
                            <ul class="mb-0">
                                @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                    <div class="top-bar-left mt-3 text-lg">
                                        <li class="dropdown ml-5">
                                            <a href="#" class="text-dark" data-toggle="dropdown"><span>
                                                    English </span> </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                        class="dropdown-item d-flex pb-3">
                                                        <i class="fa fa-language fa-2x br-3" aria-hidden="true"></i>
                                                        &nbsp;&nbsp;
                                                        <div>
                                                            <strong>{{ $properties['native'] }}</strong>
                                                        </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </li>
                                    </div>
                                @else
                                    <div class="top-bar-right mt-2 text-lg">
                                        <li class="dropdown ml-5">
                                            <a href="#" class="text-dark" data-toggle="dropdown"><span>
                                                    عربي </span> </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                        class="dropdown-item d-flex pb-3">
                                                        <i class="fa fa-language fa-2x br-3" aria-hidden="true"></i>
                                                        &nbsp;&nbsp;
                                                        <div>
                                                            <strong>{{ $properties['native'] }}</strong>
                                                        </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </li>
                                    </div>
                                @endif
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->

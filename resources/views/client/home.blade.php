@extends('client.layouts.admin')
@section('title')
@endsection
@section('content')
    {{-- =============== Start breadcrumb =============== --}}
    <section>
        <div class="bannerimg mt-6 bg-gradient-to-r from-sky-50 to-blue-50 p-4">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center">
                        <div class="flex items-center justify-center gap-2">
                            <h1 style="font-size: 50px; font-family: cairo;"
                                class="mt-4 animate-pulse bg-gradient-to-r from-sky-300 to-red-700 bg-clip-text p-2 text-transparent">
                                الهدهد للأنباء </h1>
                            <i class="fa fa-globe fa-spin text-6xl text-blue-500"></i>
                        </div>
                        <div class="" style="font-family: cairo;">
                            @foreach ($categories_cat as $category)
                                <a href="{{ route('postsByCategory', $category->id) }}" class="text-lg">
                                    @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                        <span>
                                            <i class="fa fa-check-circle text-blue-500"></i>
                                            {{ $category->name_ar }}</span>
                                    @else
                                        <i class="fa fa-check-circle text-blue-500"></i>
                                        {{ $category->name_en }}
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ================ End breadcrumb ================ --}}

    <div class="container">
        <div class="row">
            <div class="col-xl-1 col-lg-1 col-md-1">
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10">

                <style>
                    .marquee {
                        display: block;
                        width: 100%;
                        white-space: nowrap;
                        overflow: hidden;
                        box-sizing: border-box;
                    }

                    .marquee span {
                        display: inline-block;
                        /* padding-left: 100%; */
                        animation: marquee 30s linear infinite;
                    }
                </style>
                @if (LaravelLocalization::getCurrentLocale() == 'ar')
                    <style>
                        @keyframes marquee {
                            0% {
                                transform: translateX(-100%);
                            }

                            100% {
                                transform: translateX(100%);
                            }
                        }
                    </style>
                @else
                    <style>
                        @keyframes marquee {
                            0% {
                                transform: translateX(100%);
                            }

                            100% {
                                transform: translateX(-100%);
                            }
                        }
                    </style>
                @endif
                <div class="col-12 bg-light text-md m-auto p-2 text-center text-black">
                    <div class="marquee">
                        <span style="font-family: cairo; font-size: 20px; ">
                            @foreach ($posts as $post)
                                {{ $post->category->name_ar }} &nbsp; :
                                <a href="{{ route('show_post', $post->id) }}">
                                    <i class="fa fa-check-circle text-green-500"></i>
                                    {{ $post->title }} .. &nbsp; &nbsp; &nbsp; &nbsp;
                                </a>
                            @endforeach
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 col-lg-1 col-md-1">
            </div>
        </div>
    </div>
    {{-- === End Start marquee === --}}

    {{-- === Start body === --}}
    <section class="sptb -mt-8">
        <div class="container">
            <div class="row">
                {{-- === Start card === --}}
                <div class="col-xl-1 col-lg-1 col-md-1">
                </div>

                <div class="col-xl-7 col-lg-7 col-md-11">
                    {{-- start Slide carsousel --}}
                    <div class="row">
                        <div id="carouselExampleIndicators"
                            @if (LaravelLocalization::getCurrentLocale() == 'ar') class="carousel slide card mr-3 bg-blue-50"
                            @else class="carousel slide card bg-blue-50 ml-3" @endif
                            data-ride="carousel" style="width: 873px; font-family: cairo; ">
                            <div class="carousel-inner">
                                @foreach ($posts as $key => $post)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <div class="flex justify-center" style=" height: 260px;">
                                            @if ($post->image)
                                                <img src="{{ $post->image }}" class="d-block w-50 p-4" alt="post_image"
                                                    style="width: 500px;">
                                            @endif
                                            <a href="{{ route('show_post', $post->id) }}">
                                                <div class="custom-carousel-content">
                                                    <h4 class="side"
                                                        style="
                                                    white-space: nowrap;
                                                overflow: hidden;
                                                text-overflow: ellipsis;
                                                    margin: 40px 0px 0px 20px; max-width: 96%;">
                                                        {{ $post->title }}
                                                    </h4>
                                                    <p class="cap"
                                                        style="text-align: justify;
                                                    line-height: 22px; margin: 0px 0px 0px 20px; ">
                                                        {!! strip_tags(Str::words($post->content, 35)) !!}
                                                    </p>
                                                    <div class="item7-card-text">
                                                        <a href="{{ route('show_post', $post->id) }}" <span
                                                            class="badge badge-success m-4 p-2">
                                                            إقرأ أكثر ...
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon p-1" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                                data-slide="next">
                                <span class="carousel-control-next-icon p-1" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                    {{-- End start Slide carsousel --}}

                    <div class="row blog-grid">
                        @foreach ($posts as $post)
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <a href="{{ route('show_post', $post->id) }}">
                                    <div class="card">
                                        <div class="item7-card-img">
                                            <div class="image" style="text-align: -webkit-center;">
                                                <img src="{{ $post->image }}" class="d-block p-2" alt="..."
                                                    style="width: 700px; height: 260px;">
                                            </div>
                                            <div class="item7-card-text" style="font-family: cairo;">
                                                <span class="badge badge-success">
                                                    {{ $post->category->name_ar }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="item7-card-desc flex justify-center gap-2">
                                                <a href="#" class="text-muted"><i class="fa fa-calendar-o"></i>
                                                    {{ Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
                                                </a>
                                                <a href="#" class="text-muted"><i class="fa fa-user-o ml-2"></i>
                                                    {{ $post->writer }}
                                                </a>
                                                <a href="#" class="text-muted"><i class="fa fa-check-circle mr-4"></i>
                                                    {{ $post->category->name_ar }}
                                                </a>
                                                <div class="mr-auto">
                                                    <a href="#" class="text-muted"><i
                                                            class="fa fa-comment-o ml-2"></i>{{ $post->comments->count() }}
                                                        تعليقات</a>
                                                </div>
                                            </div>
                                            <a href="{{ route('show_post', $post->id) }}" class="hover:bg-red-500">
                                                <div style="white-space: nowrap;
                                                overflow: hidden;
                                                text-overflow: ellipsis;
                                                    font-size: 18px; font-weight: bold; font-family:cairo; "
                                                    class="text-black-500 mb-2 mt-2 rounded-sm bg-gradient-to-r from-green-50 via-green-100 to-blue-200 p-2 hover:rounded-md hover:bg-red-100">
                                                    {{ $post->title }}
                                                </div>
                                            </a>
                                            <div
                                                style="font-family: 'Almarai', sans-serif;
                                                     color:black; font-size: 15px; height: 110px;
                                                     text-indent: 30px; text-align: justify; line-height: 25px; ">
                                                <a href="{{ route('show_post', $post->id) }}" <p
                                                    class="tm-pt-30 hover:bg-gray-100 hover:text-blue-500">
                                                    {!! strip_tags(Str::words($post->content, 30)) !!}
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="mr-auto mt-2">
                                                <a class="text-muted">
                                                    <i class="fa fa-eye"></i> &nbsp;
                                                    المشاهدات {{ $post->view }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="center-block text-center">
                        <p class="pagination mb-lg-0 mb-5">
                            {{ $posts->links() }}
                        </p>
                    </div>
                </div>
                {{-- === Start sidebar === --}}
                @include('client.includes.sidebar')
                {{-- === End sidebar ===  --}}

                <div class="col-xl-1 col-lg-1 col-md-1">
                </div>
            </div>
        </div>

    </section>
    {{-- === End body === --}}
@endsection

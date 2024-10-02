@extends('client.layouts.admin')
@section('title')
@endsection
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg mt-6 bg-gradient-to-r from-sky-100 to-emerald-300 p-4">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center">
                        <div class="flex items-center justify-center gap-2">
                            <h1 style="font-size: 50px; font-family: cairo;"
                                class="animate-pulse bg-gradient-to-r from-sky-300 to-red-700 bg-clip-text p-2 text-transparent">
                                موقع الهدهد </h1>
                            <i class="fa fa-globe fa-spin text-6xl"></i>
                        </div>
                        <ol class="flex justify-center gap-4 text-center text-lg" style="font-family: cairo;">
                            <li class="text-dark"><a href="{{ route('home') }}">الرئيسية - </a></li>
                            <li class="text-dark"><a href="{{ route('home') }}">قائمة الأخبار </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <!--Left Side Content-->
                <div class="col-xl-1 col-lg-1 col-md-1">
                </div>

                <div class="col-xl-7 col-lg-7 col-md-11"> <!--Coursed lists-->
                    <div class="row">
                        @forelse ($posts as $post)
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="ribbon ribbon-top-right text-warning">
                                    </div>
                                    <div class="row no-gutters blog-list">
                                        <div class="col-xl-4 col-lg-12 col-md-12 m-auto">
                                            <a href="{{ route('show_post', $post->id) }}">
                                                <div class="image h-full w-full" style="text-align: -webkit-center;">
                                                    <img src="{{ $post->image }}"
                                                        class="cover-image h-full max-h-80 w-full rounded-sm object-cover"
                                                        style=" width: 65%; height: 65%;";>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-12">
                                            <div class="card-body">
                                                <div class="item7-card-desc d-flex">
                                                    <a href="#" class="text-muted"><i
                                                            class="fa fa-calendar-o ml-2"></i>
                                                        {{ Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
                                                    </a>
                                                    <a href="#" class="text-muted"><i class="fa fa-user-o ml-2"></i>
                                                        {{ $post->writer }}
                                                    </a>
                                                    <a href="#" class="text-muted"><i
                                                            class="fa fa-check-circle mr-4"></i>
                                                        {{ $post->category->name_ar }}
                                                    </a>
                                                    <div class="mr-auto">
                                                        <a href="#" class="text-muted"><i
                                                                class="fa fa-comment-o ml-2"></i>{{ $post->comments->count() }}
                                                            تعليقات</a>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <a href="{{ route('show_post', $post->id) }}" class="hover:bg-red-500">
                                                        <div style="font-size: 20px; font-weight: bold; font-family:cairo;"
                                                            class="text-black-500 mb-2 mt-2 rounded-sm bg-gradient-to-r from-green-50 via-green-100 to-blue-200 p-2 hover:rounded-md hover:bg-red-100">
                                                            {{ $post->title }}
                                                        </div>
                                                    </a>
                                                </div>
                                                <div
                                                    style="font-family: 'Almarai', sans-serif;
                                                     color:black; font-size: 17px;
                                                     text-indent: 30px; text-align: justify; line-height: 25px;">
                                                    <a href="{{ route('show_post', $post->id) }}" <p
                                                        class="tm-pt-30 hover:bg-gray-100 hover:text-blue-500">
                                                        {!! strip_tags(Str::words($post->content, 50)) !!}
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
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h1 class="alert alert-secondary text-danger container p-3 text-center"
                                style="font-size: 30px;">
                                ليس هناك مقالات في التصنيف المحدد
                            </h1>
                        @endforelse
                    </div>
                    <div class="center-block text-center">
                        <div class="text-center">
                            <p class="page-item page-prev">
                                {{ $posts->links() }}
                            </p>
                        </div>
                    </div>
                </div>
                @include('client.includes.sidebar')

                <div class="col-xl-1 col-lg-1 col-md-1">
                </div>
            </div>
        </div>
    </section><!--/Section-->
@endsection

@extends('client.layouts.admin')
@section('title')
@endsection
@section('content')
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
                        <div class="" style="font-family: cairo;">
                            @foreach ($categories_cat as $category)
                                <a href="{{ route('postsByCategory', $category->id) }}" class="text-lg">
                                    @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                        <span>
                                            <i class="fa fa-check-circle text-blue-500"></i>
                                            {{ $category->name_ar }}</span>
                                        @else{{ $category->name_en }}
                                    @endif
                                </a>
                            @endforeach
                        </div>
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
                <!--/Left Side Content-->
                <!--Coursed Lists-->
                <div class="col-xl-1 col-lg-1 col-md-1">
                </div>

                <div class="col-xl-7 col-lg-7 col-md-11">
                    <div class="card blog-detail">
                        <div class="card-body">
                            <div class="m-auto text-center">
                                <img width="50%" src="{{ $post->image }}" class="m-auto">
                                <div class="item7-card-text">
                                    {{-- <span class="badge badge-info">Online</span> --}}
                                </div>
                            </div>
                            <div class="item7-card-desc d-flex mb-2 mt-3">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-o ml-2"></i>
                                    {{ Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
                                </a>
                                <a href="#" class="text-muted"><i class="fa fa-user-o text-muted ml-2"></i>
                                    {{-- {{ $post->user->name }} --}}
                                    {{ $post->writer }}
                                </a>
                                <a href="#" class="text-muted"><i class="fa fa-check-circle mr-4"></i>
                                    {{ $post->category->name_ar }}
                                </a>
                                <div class="mr-auto">
                                    <a href="#" class="text-muted"><i
                                            class="fa fa-comment-o ml-2"></i>{{ $post->comments->count() }}
                                        تعليق</a>
                                </div>
                            </div>
                            <div style="text-align: center; font-size: 27px; font-weight: bold; font-family:cairo;"
                                class="text-black-500 mb-2 mt-2 rounded-sm bg-gradient-to-r from-green-50 via-green-100 to-blue-200 p-2 hover:rounded-md hover:bg-red-100">
                                {{ $post->title }}
                            </div>
                            <article
                                style="font-family: 'Almarai', sans-serif; color:black;
                            text-indent: 30px; text-align: justify; font-size: 19px; line-height: 30px; ">
                                <div
                                    style="font-size: 20px; line-height: 30px;
                                font-family: 'Almarai', sans-serif; color:black;
                            text-indent: 30px; text-align: justify;">
                                    @php echo strip_tags($post->content,'<div><img><span><br>');  @endphp
                                </div>
                            </article>

                        </div>

                        <div class="text-primary d-flex">
                            <p class="alert alert-light mt-1">عدد المشاهدات: {{ $post->view }}
                            </p>

                        </div>
                    </div>
                    {{-- ========================================== Comments ========================================== --}}
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">تعليقات</h3>
                        </div>
                        <div class="card-body p-0">
                            @foreach ($post->comments as $comment)
                                @if ($comment->parent == 0)
                                    <div class="media mt-0 p-5">
                                        <div class="d-flex ml-3">
                                            <a href="#"><img class="media-object brround" alt="64x64"
                                                    src="{{ $comment->user->image }}"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="font-weight-bold mb-1 mt-0">{{ $comment->user->name }}
                                                <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="verified"><i
                                                        class="fa fa-check-circle-o text-success"></i></span>
                                                <span class="fs-14 float-right ml-2"> 4.5
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star-half-o text-yellow"></i>
                                                </span>
                                            </h4>

                                            <small class="text-muted">
                                                <div>
                                                    <i class="fa fa-calendar"></i>
                                                    {{ Carbon\Carbon::createFromTimeStamp(strtotime($comment->created_at))->diffForHumans() }}
                                                    <i class="fa fa-clock-o mr-3"></i>
                                                    {{ $comment->created_at->toTimeString() }}
                                                    <i class="fa fa-map-marker mr-3"></i>
                                                    Yemen
                                                </div>
                                            </small>

                                            <p class="fs-15 mb-2 mt-2">
                                                {{ $comment->comment }}
                                            </p>
                                            <a href="#" class="ml-2"><span
                                                    class="badge badge-primary">مفيد</span></a>
                                            <a href="" class="text-muted mr-2" data-toggle="modal"
                                                data-target="#Comment"><span class="badge badge-default">تعليق</span></a>
                                            <a href="" class="text-muted mr-2" data-toggle="modal"
                                                data-target="#report"><span class="badge badge-default">تقرير</span></a>

                                            {{-- =========================== Replay =========================== --}}
                                            @foreach ($comment->replies as $replay)
                                                <div class="media mt-5">
                                                    <div class="d-flex ml-3">
                                                        <a href="#"> <img class="media-object brround" alt="64x64"
                                                                src="{{ $replay->user->image }}"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="font-weight-bold mb-1 mt-0">
                                                            {{ $replay->user->name }}
                                                            <span class="fs-14 ml-0" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="verified"><i
                                                                    class="fa fa-check-circle-o text-success"></i></span>
                                                        </h4>
                                                        <small class="text-muted">Dec 21st <i
                                                                class="fa fa-calendar ml-1 mr-3"></i>
                                                            {{ $comment->created_at->toTimeString() }}
                                                            <i class="fa fa-clock-o mr-3"></i> Yemen <i
                                                                class="fa fa-map-marker float-right ml-1 mt-1"></i>
                                                        </small>
                                                        <p class="fs-15 mb-2 mt-2">
                                                            {{ $replay->comment }}
                                                        </p>
                                                        <a href="" data-toggle="modal"
                                                            data-target="#Comment"><span
                                                                class="badge badge-default">تعليق</span></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @auth
                        <div class="card mb-lg-0">
                            <div class="card-header">
                                <h3 class="card-title">Write Your Comments</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('save_comment', $post->id) }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <textarea name="message" class="form-control" name="example-textarea-input" rows="6"
                                            placeholder="Write Your Comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Send Comment" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <div class="alert alert-secondary p-4">
                            <a style="color: rgb(230, 87, 87); " href="#">يجب عليك تسجيل الدخول لكتابة
                                تعليق</a>
                        </div>
                    @endguest
                </div>
                <!--/Coursed Lists-->
                @include('client.includes.sidebar')
            </div>
            <div class="col-xl-1 col-lg-1 col-md-1">
            </div>
        </div>
    </section>



    <section class="sptb -mt-24">
        <div class="container">
            <div class="p-4 text-center text-4xl" style="font-family: cairo;">مزيدًا من الأخبار ...</div>
            <div class="row">
                {{-- === Start card === --}}
                <div class="col-xl-1 col-lg-1 col-md-1">
                </div>
                @foreach ($postsMore as $item)
                    <div class="col-xl-2 col-lg-12 col-md-12">
                        <a href="{{ route('show_post', $item->id) }}">
                            <div class="card">
                                <div class="item7-card-img">
                                    <div class="image" style="text-align: -webkit-center;">
                                        <img src="{{ $item->image }}" class="d-block p-2" alt="..."
                                            style="width: 700px; height: 180px;">
                                    </div>
                                    <div class="item7-card-text" style="font-family: cairo;">
                                        <span class="badge badge-success">
                                            {{ $item->category->name_ar }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="item7-card-desc">
                                        <a href="#" class="text-muted"><i class="fa fa-calendar-o"></i>
                                            {{ Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans() }}
                                        </a>
                                    </div>
                                    <a href="{{ route('show_post', $item->id) }}" class="hover:bg-red-500">
                                        <div style="white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                        font-size: 15px; font-weight: bold; font-family:cairo; "
                                            class="text-black-500 mb-2 mt-2 rounded-sm bg-gradient-to-r from-green-50 via-green-100 to-blue-200 p-2 hover:rounded-md hover:bg-red-100">
                                            {{ $item->title }}
                                        </div>
                                    </a>
                                    <div
                                        style="font-family: 'Almarai', sans-serif;
                                         color:black; font-size: 15px; height: 160px;
                                          text-align: justify; line-height: 20px; ">
                                        <a href="{{ route('show_post', $item->id) }}" <p
                                            class="tm-pt-30 hover:bg-gray-100 hover:text-blue-500">
                                            {!! strip_tags(Str::words($item->content, 25)) !!}
                                            </p>
                                        </a>
                                    </div>
                                    <div class="mr-auto mt-2">
                                        <a class="text-muted">
                                            <i class="fa fa-eye"></i> &nbsp;
                                            المشاهدات {{ $item->view }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

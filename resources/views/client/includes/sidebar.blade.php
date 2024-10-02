<div class="col-xl-3 col-lg-4 col-md-12">
    <div class="card" style="font-family: cairo;">
        <!-- ======================== Search form ======================== -->
        <div class="card-body">
            <form action="
            {{ route('search_post_home') }}
            " method="post">
                @csrf
                <div class="input-group">
                    <input type="search" class="form-control br-tl-3 br-bl-3" placeholder="بحث" name="ser"
                        id="ser" required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-info br-tr-3 br-br-3">
                            بحث
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- ======================== End Search form ======================== -->
    </div>



    <div class="card" style="font-family: cairo;">
        <div class="card-header">
            <h3 class="card-title">التصنيفات</h3>
        </div>
        <div class="card-body p-0">
            <div class="list-catergory">
                <div class="item-list">
                    <ul class="list-group mb-0">

                        @foreach ($categories_cat as $category)
                            <li class="list-group-item">
                                <a href="{{ route('postsByCategory', $category->id) }}" class="text-dark">
                                    <i class="fa fa-list bg-info text-primary"></i>

                                    @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{ $category->name_ar }}
                                        @else{{ $category->name_en }}
                                    @endif

                                    <span class="badgetext badge badge-pill badge-light mb-0 mt-1">
                                        {{ $category->posts->count() }}
                                    </span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- =========================== last Posts =========================== --}}

    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="font-family: cairo;">آخر الأخبار</h3>
        </div>
        <div class="card-body pb-3">
            <div class="rated-products">
                <ul class="vertical-scroll">
                    @foreach ($latestPosts as $item)
                        <li class="item">
                            <div class="media m-0 mt-0 gap-4 p-5">
                                {{-- <img class=" ml-4" src="{{ $item->image }}" alt="img"> --}}
                                <img src="{{ $item->image }}" alt="img" class="">

                                <div class="media-body">
                                    <a href="  {{ route('show_post', $item->id) }}  ">
                                        <h5 class="mb-1 mt-2 font-bold text-blue-900"
                                            style="font-family: cairo; line-height: 25px; font-size: 15px;">
                                            {{ $item->title }}
                                        </h5>
                                        <span class="rated-products-ratings text-primary">
                                            <i class="fa fa-calendar"></i>
                                            {{ Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans() }}
                                            <i class="fa fa-clock-o mr-3"></i>
                                            {{ $item->created_at->toTimeString() }}
                                        </span>
                                        {{-- <div class="h5 font-weight-semibold mb-0 mt-1"> {!! strip_tags(Str::words($item->content, 15)) !!}
                                        </div> --}}
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>



</div>


{{-- =============================================================== --}}
<style>
    .social-icons {
        position: fixed;
        bottom: 29px;
        right: 20px;
        display: flex;
        flex-direction: column;
        font-size: 25px;
    }

    .social-icon {
        margin-bottom: 15px;
        width: 40px;
        height: 40px;
        background-color: #dfecef;
        /* color: #1b4f97; */
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="social-icons">
            <div class="social-icon">
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa fa-facebook-f text-blue-500"></i>
                </a>
            </div>
            <div class="social-icon">
                <a href="https://www.twitter.com/" target="_blank">
                    <i class="fa fa-twitter text-info"></i>
                </a>
            </div>
            <div class="social-icon">
                <a href="https://www.instagram.com/" target="_blank">
                    <i class="fa fa-instagram text-red-500"></i>
                </a>
            </div>
            <div class="social-icon">
                <a href="https://www.linkedin.com/" target="_blank">
                    <i class="fa fa-linkedin text-blue-700"></i>
                </a>
            </div>
            {{-- <div class="social-icon">
                <a href="https://www.pinterest.com/" target="_blank">
                    <i class="fa fa-pinterest text-red-600"></i>
                </a>
            </div> --}}
            <!-- Add more social icons here -->
        </div>
    </div>
</div>

{{--
<li>
    <a class="social-icon text-dark" href="#"><i class=""></i></a>
</li>
<li>
    <a class="social-icon text-dark" href="#"><i class="fa fa-twitter text-info"></i></a>
</li>
<li>
    <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin text-info"></i></a>
</li>
<li>
    <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus text-danger"></i></a>
</li> --}}

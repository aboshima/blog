@extends('admin.layout.master')
@section('title')
    Dashboard
@endsection
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('sidebar_menu.dashboard') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('sidebar_menu.dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('sidebar_menu.dashboard') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div class="row row-cards">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <a href="{{ route('list_users') }}">
                    <div class="card-body feature text-center">
                        <div class="fa-stack fa-lg fa-1x icons shadow-default bg-primary-transparent">
                            <i class="icon icon-people text-primary"></i>
                        </div>
                        <p class="card-text mb-3 mt-3">{{ __('content.users_number') }}</p>
                        <p class="h2 text-primary font-weight-bold text-center">{{ Auth::User()->count() }}</p>
                    </div>
                </a>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <a href="{{ route('list_categories') }}">
                    <div class="card-body feature text-center">
                        <div class="fa-stack fa-lg fa-1x icons shadow-default bg-secondary-transparent">
                            <i class="icon icon-refresh text-secondary"></i>
                        </div>
                        <p class="card-text mb-3 mt-3">{{ __('content.categories_number') }}</p>
                        <p class="h2 text-secondary font-weight-bold text-center">{{ $rowCount }}</p>
                    </div>
                </a>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <a href="{{ route('list_posts') }}">
                    <div class="card-body feature text-center">
                        <div class="fa-stack fa-lg fa-1x icons shadow-default bg-warning-transparent">
                            <i class="icon icon-speech text-warning"></i>
                        </div>
                        <p class="card-text mb-3 mt-3">{{ __('content.posts_number') }}</p>
                        <p class="h2 text-warning font-weight-bold text-center">{{ $rowCount_post }}</p>
                    </div>
                </a>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <a href="{{ route('message_list') }}">
                    <div class="card-body feature text-center">
                        <div class="fa-stack fa-lg icons shadow-default bg-info-transparent">
                            <i class="icon icon-rocket text-info"></i>
                        </div>
                        <p class="card-text mb-3 mt-3">{{ __('content.messages_number') }}</p>
                        <p class="h2 text-info font-weight-bold text-center">{{ $rowCount_message }}</p>
                    </div>
                </a>
            </div>
        </div><!-- COL END -->
    </div>
@endsection

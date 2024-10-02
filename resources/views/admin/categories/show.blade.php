@extends('admin.layout.master');
@section('title')
    Show Category
@endsection
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.categories') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('sidebar_menu.dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.view') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div style="display:flex; justify-content:center;">
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">{{ __('content.view') }}</h3>
                    <div class="card-options">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                class="fe fe-chevron-up"></i></a>
                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                </div>
                <div class="card-body text-center">
                    <img style="border-radius: 50%; border:1px solid #eee;  padding: 10px"
                        src="{{ $show_category->image }}"width="600px">
                    <h4 class="h4 mb-0 mt-3">
                        @if (LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $show_category->name_ar }}
                        @else
                            {{ $show_category->name_en }}
                        @endif
                    </h4>
                    {{-- <h4 class="h4 mb-0 mt-3">{{ $show_category->name_en }}</h4> --}}
                    <p class="card-text fs-1 mt-3">
                        @if ($show_category->is_active == 1)
                            <span class="badge badge-success">{{ __('content.enabled') }}</span>
                        @else
                            <span class="badge badge-danger">{{ __('content.disabled') }}</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layout.master')
@section('title')
    Edit Category
@endsection
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.categories') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('sidebar_menu.dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.edit_category') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card m-b-20">
                <div class="card-header bg-light">
                    <h3 class="card-title" style="font-family: cairo">{{ __('content.edit_category') }} </h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('update_category', $category->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label class="form-label"
                                        for="exampleInputEmail1">{{ __('content.name_by_arabic') }}</label>
                                    <input type="text" name="name_ar" value="{{ $category->name_ar }}"
                                        class="form-control" id="name1"
                                        placeholder="{{ __('content.name_by_arabic') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label class="form-label"
                                        for="exampleInputEmail1">{{ __('content.name_by_english') }}</label>
                                    <input type="text" name="name_en" value="{{ $category->name_en }}"
                                        class="form-control" id="name2"
                                        placeholder="{{ __('content.name_by_english') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="form-label">{{ __('content.status') }}</label>
                                <select id="inputState" name="status" class="form-control">
                                    <option value=1 @if ($category->is_active == 1) selected @endif>
                                        {{ __('content.enabled') }}</option>
                                    <option value=0 @if ($category->is_active == 0) selected @endif>
                                        {{ __('content.disabled') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="col-form-label">{{ __('content.image') }}</label>
                                <input type="file" name="cat_image" class="dropify"
                                    data-default-file="{{ $category->image }}" data-height="180" />
                            </div>
                        </div>
                        <div class="form-footer container">
                            <button type="submit" class="btn btn-app bg-success text-white"><i class="fa fa-save"></i>
                                {{ __('content.edit_category') }} </button>
                            <a href="{{ route('list_categories') }}" class="btn btn-app bg-danger text-white"><i
                                    class="fa fa-times"></i> {{ __('content.cancel') }}</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

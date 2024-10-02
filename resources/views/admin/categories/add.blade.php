@extends('admin.layout.master')
@section('title')
    Add Category
@endsection
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.categories') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('content.categories') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.add_new_category') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card m-b-20">
                <div class="card-header bg-light">
                    <h3 class="card-title" style="font-family: cairo">{{ __('content.add_new_category') }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('save_category') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label class="form-label"
                                        for="exampleInputEmail1">{{ __('content.name_by_arabic') }}</label>
                                    <input type="text" class="form-control" id="name1" name="name_ar" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label class="form-label"
                                        for="exampleInputEmail1">{{ __('content.name_by_english') }}</label>
                                    <input type="text" class="form-control" id="name2" name="name_en" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="exampleInputEmail1">{{ __('content.status') }}</label>
                                <select id="inputState" class="form-control bg-light" name="status">
                                    <option value="1">{{ __('content.enabled') }}</option>
                                    <option value="0">{{ __('content.disabled') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">تحميل الصورة</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <input type="file" class="dropify" data-height="180"name="cat_image" />
                                </div>
                            </div>
                        </div>
                        <div class="form-footer container">
                            <button type="submit" class="btn btn-app bg-success text-white"><i class="fa fa-save"></i>
                                {{ __('content.add_new_category') }} </button>
                            <a href="{{ route('list_categories') }}" class="btn btn-app bg-danger text-white"><i
                                    class="fa fa-times"></i> {{ __('content.cancel') }}</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

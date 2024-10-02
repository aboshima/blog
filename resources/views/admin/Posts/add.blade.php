@extends('admin.layout.master')

@section('content')
    {{-- ====================== breadcrumb Header ====================== --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.posts') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('content.posts') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.add_new_post') }}</li>
        </ol>
    </div>
    {{-- ====================== End breadcrumb ====================== --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card m-b-20">
                <div class="card-header bg-light">
                    <h3 class="card-title">{{ __('content.add_new_post') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('save_post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="form-label" for="exampleInputEmail1">{{ __('content.writer') }}</label>
                                <input type="text" name="writer" class="form-control bg-light"
                                    placeholder="{{ __('content.writer') }}" required>
                                <label class="form-label" for="exampleInputEmail1">{{ __('content.title') }}</label>
                                <input type="text" name="post_title" class="form-control bg-light"
                                    placeholder="{{ __('content.title') }}" required>
                                <label class="form-label" for="exampleInputEmail1">{{ __('content.languge') }}</label>
                                <select id="" name="post_lang" class="form-control bg-light">
                                    <option value="ar">{{ __('content.arabic') }}</option>
                                    <option value="en">{{ __('content.english') }}</option>
                                </select>
                                <label for="inputState" class="form-label">{{ __('content.status') }}</label>
                                <select id="inputState" name="is_active" class="form-control">
                                    <option value="1">{{ __('content.enabled') }}</option>
                                    <option value="0">{{ __('content.disabled') }}</option>
                                </select>
                                <label class="form-label" for="exampleInputEmail1">{{ __('content.category') }}</label>
                                <select id="" name="post_category" class="form-control bg-light">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <label for="" class="col-form-label">{{ __('content.image') }}</label>
                                <input type="file" name="post_img" class="dropify" data-height="180" />
                            </div>
                            <div class="form-group col-md-8">
                                <div class="form-group">
                                    <label class="col-form-label">{{ __('content.content') }}</label>
                                    <textarea id="summernote" class="form-control" name="post_content" rows="4" placeholder="content.."></textarea>
                                </div>
                            </div>
                            <div class="form-footer container">
                                <button type="submit" class="btn btn-app bg-success text-white"><i class="fa fa-save"></i>
                                    {{ __('content.add_new_post') }} </button>
                                <a href="{{ route('list_posts') }}" class="btn btn-app bg-danger text-white"><i
                                        class="fa fa-times"></i> {{ __('content.cancel') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

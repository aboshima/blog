@extends('admin.layout.master')
@section('title')
    Add User
@endsection
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.users') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('content.users') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.add_user') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card m-b-20">
                <div class="card-header bg-light">
                    <h3 class="card-title" style="font-family: cairo">{{ __('content.add_user') }}</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('save_user') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">{{ __('content.name') }}</label>
                                    <input type="text" name="user_name" class="form-control" id="name1"
                                        placeholder="{{ __('content.name') }} " required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">{{ __('content.email') }}</label>
                                    <input type="email" name="user_email" class="form-control" id="name2"
                                        placeholder="{{ __('content.email') }}" required>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputState" class="form-label">{{ __('content.user_type') }}</label>
                                <select id="inputState" name="user_role" class="form-control">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->display_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <h3 class="card-title">تحميل الصورة</h3>
                                <div class="col-lg-4 col-sm-12">
                                    <input type="file" class="dropify" data-height="180"name="user_image" />
                                </div>
                            </div>
                        </div>

                        <div class="form-footer container">
                            <button type="submit" class="btn btn-app bg-success text-white"><i class="fa fa-save"></i>
                                {{ __('content.add_user') }} </button>
                            <a href="{{ route('list_users') }}" class="btn btn-app bg-danger text-white"><i
                                    class="fa fa-times"></i> {{ __('content.cancel') }}</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

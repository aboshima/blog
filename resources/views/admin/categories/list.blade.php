@extends('admin.layout.master')
@section('title')
    List Category
@endsection
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.categories') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('sidebar_menu.dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.list_categories') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div class="card">
        <div class="card-header bg-light d-none d-md-flex justify-content-between items-center">
            <h3 class="card-title" style="font-family: cairo">{{ __('content.list_categories') }}</h3>
            <a href="{{ route('new_category') }}"
                class="btn btn-square btn-secondary ml-3 mr-3">{{ __('content.add_new_category') }}</a>
        </div>
        <div class="card-body">

            {{-- ================ Start Search form ================ --}}
            <div>
                <div class="nav-search mb-3">
                    <form action="{{ route('search_category') }}" method="post">
                        @csrf
                        <div class="row">
                            <input type="search" class="form-control header-search" style="width: 250px;"
                                placeholder="{{ __('sidebar_menu.search') }}" name="ser" id="ser"
                                aria-label="Search" required>
                            <button class="btn btn-primary bg-info mr-1" type="submit"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- ================ End Search form ================ --}}

            <div class="table-responsive">
                <table class="table-bordered border-top mb-0 table">
                    <thead style="background-color: rgb(240, 231, 248); font-size: 20px;">
                        <tr>
                            <th><i class="fa fa-list"></i> </th>
                            <th><i class="zmdi zmdi-spinner" aria-hidden="true"></i> {{ __('content.name_by_arabic') }}</th>
                            <th><i class="zmdi zmdi-spinner" aria-hidden="true"></i> {{ __('content.name_by_english') }}
                            </th>
                            <th><i class="fa fa-picture-o" aria-hidden="true"></i> {{ __('content.image') }}</th>
                            <th><i class="fa fa-smile-o" aria-hidden="true"></i> {{ __('content.status') }}</th>
                            <th class="text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                {{ __('content.edit') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name_ar }}</td>
                                <td>{{ $category->name_en }}</td>
                                <td><img src="{{ $category->image }}"width="70px" height="70px">
                                </td>
                                <td>
                                    @if ($category->is_active == 1)
                                        <span class="badge badge-success">{{ __('content.enabled') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('content.disabled') }}</span>
                                    @endif
                                </td>
                                <td style=" text-align:center;">
                                    <div class="mb-1 text-center">
                                        <a href="
                                        {{ route('show_category', $category->id) }}
                                        "
                                            class="btn btn-success"><span class="fa fa-eye"></span> مشاهدة </a>
                                        <a href="
                                        {{ route('edit_category', $category->id) }}
                                        "
                                            class="btn btn-info"><span class="fa fa-edit"></span> تعديل </a>
                                        <a href="{{ route('delete_category', $category->id) }}" class="btn btn-danger"
                                            id="are_you_sure" onclick="return confirm('هل أنت متأكد من حذف التصنيف')">
                                            <i class="fas fa-trash-alt"></i>
                                            حذف </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

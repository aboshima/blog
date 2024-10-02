@extends('admin.layout.master')

@section('content')
    {{-- ====================== breadcrumb Header ====================== --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.posts') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('content.posts') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.post') }}</li>
        </ol>
    </div>
    {{-- ====================== End breadcrumb ====================== --}}

    <div class="card">
        <div class="card-header bg-light d-none d-md-flex justify-content-between items-center">
            <h3 class="card-title" style="font-family: cairo">{{ __('content.list_posts') }}</h3>
            <div class="float-right mr-3">
                <a href="{{ route('new_post') }}" class="btn btn-primary bg-info"> {{ __('content.add_new_post') }}</a>
            </div>
        </div>
        <div class="card-body">

            <!-- ======================== Search form ======================== -->
            <div>
                <div class="nav-search mb-3">
                    <form action="{{ route('search_post') }}" method="post">
                        @csrf
                        <div class="row">
                            <input type="search" class="form-control header-search"
                                placeholder="{{ __('sidebar_menu.search') }}" name="ser" id="ser"
                                aria-label="Search" required>
                            <button class="btn btn-primary bg-info mr-1" type="submit"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ======================== End Search form ======================== -->

            <div class="table-responsive">
                <table class="table-bordered border-top table-hover mb-0 table">
                    <thead style="background-color: rgb(210, 217, 233); text-align:center;">
                        <tr>
                            <th><i class="fa fa-list"></i></th>
                            <th><i class="fa fa-spinner" aria-hidden="true"></i> {{ __('content.title') }}</th>
                            <th><i class="fa fa-pencil-square" aria-hidden="true"></i> {{ __('content.writer') }}</th>
                            <th><i class="fa fa-plus-square" aria-hidden="true"></i> {{ __('content.category') }}</th>
                            <th><i class="fa fa-language" aria-hidden="true"></i> {{ __('content.languge') }}</th>
                            <th><i class="fa fa-align-justify" aria-hidden="true"></i> {{ __('content.content') }}</th>
                            <th><i class="fa fa-picture-o" aria-hidden="true"></i> {{ __('content.image') }}</th>
                            <th><i class="fa fa-smile-o" aria-hidden="true"></i> {{ __('content.status') }}</th>
                            <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('content.edit') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_posts as $post)
                            <tr>
                                {{-- <th>{{ $loop->iteration }}</th> --}}
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->writer }}</td>
                                <td>
                                    @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{ $post->category->name_ar }}
                                        @else{{ $post->category->name_en }}
                                    @endif
                                </td>
                                {{-- <td>{{ $post->category->name_ar }} - {{ $post->category->name_en }}</td> --}}
                                <td>{{ $post->lang }}</td>
                                <td style="width: 400px;">
                                    {{-- {{ $post->content }} --}}
                                    <p> {!! strip_tags(Str::words($post->content, 40)) !!}</p>
                                </td>
                                <td><img src="{{ $post->image }}"width="80px"></td>
                                <td>
                                    @if ($post->is_active == 1)
                                        <span class="badge badge-success">{{ __('content.enabled') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('content.disabled') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="m-1">
                                        <a href="{{ route('show_post', $post->id) }}" class="btn btn-success"
                                            type="button"><span class="fa fa-eye"></span>
                                        </a>
                                        <a href="{{ route('edit_post', $post->id) }}" class="btn btn-info"
                                            type="button"><span class="fa fa-edit"></span>
                                        </a>

                                        <a href="{{ route('delete_post', $post->id) }}" class="btn btn-danger"
                                            id="are_you_sure" onclick="return confirm('هل أنت متأكد من حذف المنشور')">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $all_posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

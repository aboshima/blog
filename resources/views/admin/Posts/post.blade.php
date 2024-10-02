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
        <div class="card-header bg-light">
            <h3 class="card-title">{{ __('content.post') }}</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered border-top table-hover mb-0 table">
                    <thead style="background-color: rgb(192, 206, 233);">
                        <tr>
                            <th>#</th>
                            <th>{{ __('content.title') }}</th>
                            <th>{{ __('content.name_content') }}</th>
                            <th>{{ __('content.languge') }}</th>
                            <th>{{ __('content.image') }}</th>
                            <th>{{ __('content.content') }}</th>
                            <th>{{ __('content.edit') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                {{-- <th>{{ $loop->iteration }}</th> --}}
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->writer }}</td>
                                <td>{{ $post->lang }}</td>
                                <td style="width: 500px;">
                                    {{-- {{ $post->content }} --}}
                                    <p> {!! strip_tags(Str::words($post->content, 80)) !!}</p>
                                </td>
                                <td><img src="{{ $post->image }}" width="100px"></td>
                                <td>
                                    <div class="m-1">
                                        <a href="" class="btn btn-success" type="button"><span
                                                class="fa fa-eye"></span>
                                            {{ __('content.view') }}</a>
                                        <a href="{{ route('edit_post', $post->id) }}" class="btn btn-info"
                                            type="button"><span class="fa fa-edit"></span>
                                            {{ __('content.edit') }}</a>
                                        <a href="" class="btn btn-danger" type="button"><span
                                                class="fa fa-trash"></span>
                                            {{ __('content.delete') }}</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layout.master')

@section('content')
    {{-- ====================== breadcrumb Header ====================== --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.list_messages') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('content.list_messages') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.list_messages') }}</li>
        </ol>
    </div>
    {{-- ====================== End breadcrumb ====================== --}}

    <div class="card">
        <div class="card-header bg-light">
            <h3 class="card-title">{{ __('content.list_messages') }}</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered border-top table-hover mb-0 table">
                    <thead style="background-color: rgb(210, 217, 233); text-align:center;">
                        <tr>
                            <th><i class="fa fa-list"></i></th>
                            <th><i class="fa fa-spinner" aria-hidden="true"></i> {{ __('content.name') }}</th>
                            <th><i class="fa fa-plus-square" aria-hidden="true"></i> {{ __('content.email') }}</th>
                            <th><i class="fa fa-language" aria-hidden="true"></i> {{ __('content.list_messages') }}</th>
                            <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('content.delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                {{-- <th>{{ $loop->iteration }}</th> --}}
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->message }}</td>
                                <td><a href="{{ route('message_delete', $message->id) }}" class="btn btn-danger"><span
                                            class="fa fa-trash"></span>
                                    </a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- <div class="mt-3">
                    {{ $all_posts->links() }}
                </div> --}}
            </div>
        </div>
    </div>
@endsection

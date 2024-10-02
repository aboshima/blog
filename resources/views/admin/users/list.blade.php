@extends('admin.layout.master')
@section('title')
    List Users
@endsection
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.users') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('sidebar_menu.dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.list_users') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div class="card">
        <div class="card-header bg-light d-none d-md-flex justify-content-between items-center" style="font-family: cairo">
            <h3 class="card-title">{{ __('content.list_users') }}</h3>
            <a href="{{ route('new_user') }}"
                class="btn btn-square btn-secondary ml-3 mr-3">{{ __('content.add_user') }}</a>
        </div>

        <div class="card-body">
            {{-- ================ Start Search form ================ --}}
            <div>
                <div class="nav-search mb-3">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <div class="row">
                            <input type="search" class="form-control header-search"
                                style="width: 250px;
                                placeholder="{{ __('sidebar_menu.search') }}"
                                name="ser" id="ser" aria-label="Search" required>
                            <button class="btn btn-primary bg-info mr-1" type="submit"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- ================ End Search form ================ --}}

            <table class="table-bordered border-top table-hover mb-0 table">
                <thead style="background-color: rgb(210, 217, 233); text-align:center;">
                    <tr>
                        <th><i class="fa fa-list"></i> </th>
                        <th><i class="fa fa-plus-square" aria-hidden="true"></i> {{ __('content.name') }} </th>
                        <th><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ __('content.email') }}</th>
                        <th><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ __('content.status') }}</th>
                        <th><i class="fa fa-user" aria-hidden="true"></i> {{ __('content.image') }}</th>
                        <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ __('content.edit') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_users as $user)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            {{-- <td>{{ $user->id }}</td> --}}
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->is_active == 1)
                                    <span class="badge badge-success">{{ __('content.enabled') }}</span>
                                @else
                                    <span class="badge badge-danger">{{ __('content.disabled') }}</span>
                                @endif
                            </td>
                            <td><img src="{{ $user->image }}"width="70px" height="70px">
                            <td style="width: 200px; text-align:center;">
                                <div class="m-1">
                                    <a href="{{ route('show_user', $user->id) }}" class="btn btn-success"
                                        type="button"><span class="fa fa-eye"></span>
                                    </a>
                                    <a href="{{ route('edit_user', $user->id) }}" class="btn btn-info" type="button"><span
                                            class="fa fa-edit"></span>
                                    </a>
                                    <a href=" {{ route('delete_user', $user->id) }} " class="btn btn-danger"
                                        type="button"><span class="fa fa-trash"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                {{ $all_users->links() }}
            </div>
        </div>
    </div>
@endsection

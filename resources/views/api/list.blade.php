@extends('api.layout.master')
@section('content')
    {{-- ================ Start breadcrumb ================ --}}
    <div class="page-header" style="font-family: cairo">
        <h4 class="page-title">{{ __('content.items') }}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('content.items') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('content.items') }}</li>
        </ol>
    </div>
    {{-- ================ End breadcrumb ================ --}}

    <div class="card">
        <div class="card-header bg-light">
            <h3 class="card-title" style="font-family: cairo">{{ __('content.items') }}</h3>
        </div>
        <div class="container">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered border-top mb-0">
                    <thead style="background-color: rgb(231, 217, 245); font-size: 20px;">
                        <tr>
                            <th><i class="fa fa-list"></i> </th>
                            <th><i class="fa fa-plus-square" aria-hidden="true"></i> العنوان</th>
                            <th><i class="fa fa-plus-square" aria-hidden="true"></i> صورة المنتج </th>
                            <th><i class="fa fa-picture-o" aria-hidden="true"></i> السعر</th>
                            <th><i class="fa fa-smile-o" aria-hidden="true"></i>الماركة</th>
                            <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i> التصنيف</th>
                            <th><i class="fa fa-smile-o" aria-hidden="true"></i>الوصف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['title'] }}</td>
                                <td style="width: 500px;">
                                    <img src="{{ $item['thumbnail'] }}"width="180px">
                                    <br>
                                    @foreach ($item['images'] as $img)
                                        <img src="{{ $img }}"width="60px">
                                    @endforeach
                                </td>
                                <td>{{ $item['price'] }}</td>
                                <td>{{ $item['brand'] }}</td>
                                <td>{{ $item['category'] }}</td>
                                <td>{{ $item['description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

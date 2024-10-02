@extends('client.layouts.admin')
@section('title')
@endsection
@section('content')
    <section>
        <div class="bannerimg mt-6 bg-gradient-to-r from-sky-50 to-blue-50 p-4">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="flex items-center justify-center gap-2">
                        <h1 style="font-size: 50px; font-family: cairo;"
                            class="animate-pulse bg-gradient-to-r from-sky-300 to-red-700 bg-clip-text p-2 text-transparent">
                            موقع الهدهد </h1>
                        <i class="fa fa-globe fa-spin text-6xl"></i>
                    </div>
                    <ol class="flex justify-center gap-4 text-center text-lg" style="font-family: cairo;">
                        <li class="text-dark"><a href="{{ route('home') }}">الرئيسية - </a></li>
                        <li class="text-dark"><a href="{{ route('home') }}">قائمة الأخبار </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--Contact-->
    <div class="sptb">
        <div class="container">
            <div style="font-size: 30px; font-family: cairo;"
                class="w-auto rounded-lg bg-gradient-to-r from-green-100 via-green-100 to-green-300 p-4 px-5 py-2.5 text-center text-4xl font-medium shadow-lg shadow-green-500/50 hover:bg-gradient-to-br">
                إرسال إيميل </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-xl-6 col-md-12">
                    <div class="text-lg">

                        Map: </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-md-12">
                    <div class="mb-4 text-lg" style="font-family: cairo;">الرسالة:-</div>
                    <div class="card mb-0">
                        <form action="{{ route('save_message') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name1"
                                        placeholder="أدخل الإسم">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="أدخل الإيميل">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="4" placeholder="أكتب الرسالة"></textarea>
                                </div>
                                <div class="text-right">
                                    <input type="submit" class="btn btn-primary" value="إرسال الرسالة" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Contact-->
@endsection

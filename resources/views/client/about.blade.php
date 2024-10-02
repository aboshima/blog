@extends('client.layouts.admin')
@section('title')
@endsection
@section('content')
    <!--Section-->
    <section>
        <div class="bannerimg mt-6 bg-gradient-to-r from-sky-100 to-emerald-300 p-4">
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
        </div>
    </section>

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div style="font-size: 30px; font-family: cairo;"
                class="w-auto rounded-lg bg-gradient-to-r from-green-100 via-green-100 to-green-300 p-4 px-5 py-2.5 text-center text-4xl font-medium shadow-lg shadow-green-500/50 hover:bg-gradient-to-br">
                ماذا تجد في موقعنا؟
            </div>
            <div class="text-justify">
                <h3 class="text-center text-2xl leading-normal" style="font-family: 'Aref Ruqaa', serif">في
                    هذا العالم المليء بالألوان
                    والتنوع، نقدم لك موقعنا
                    لتجد الكثير من المواد
                    والمنشورات التي تلامس قلوب القراء وتثير فضولهم.</h3>
                <p class="px-6" style="font-family: Gulzar, serif; font-size: 19px; line-height: 60px;">
                    <i class="fa fa-check-circle text-green-500"></i>
                    <span class="text-2xl text-blue-500"> رحلات وتجارب: </span>
                    <span style="font-family: cairo;"> نأخذك في رحلاتنا حول العالم، نشاركك تجاربنا، ونكتب عن المعالم
                        السياحية والثقافات المختلفة.
                    </span>
                </p>
                <p class="px-6" style="font-family: Gulzar, serif; font-size: 19px; line-height: 60px;">
                    <i class="fa fa-check-circle text-green-500"></i>
                    <span class="text-2xl text-blue-500"> فنون وإبداع: </span>
                    <span style="font-family: cairo;">
                        نستعرض الفنون المتنوعة، من الرسم والتصوير إلى الأدب والموسيقى.
                    </span>
                </p>
                <p class="px-6" style="font-family: Gulzar, serif; font-size: 19px; line-height: 60px;">
                    <i class="fa fa-check-circle text-green-500"></i>
                    <span class="text-2xl text-blue-500">
                        صحة وعافية: </span>
                    <span style="font-family: cairo;">
                        نقدم نصائح صحية، ونتناول مواضيع العافية الجسدية والنفسية.
                    </span>
                </p>
                <p class="px-6" style="font-family: Gulzar, serif; font-size: 19px; line-height: 60px;">
                    <i class="fa fa-check-circle text-green-500"></i>
                    <span class="text-2xl text-blue-500"> تكنولوجيا وابتكار: </span>
                    <span style="font-family: cairo;">
                        نتابع أحدث التطورات التكنولوجية، ونستعرض الابتكارات الرائعة.
                    </span>
                </p>
                <p class="px-6" style="font-family: Gulzar, serif; font-size: 19px; line-height: 60px;">
                    <i class="fa fa-check-circle text-green-500"></i>
                    <span class="text-2xl text-blue-500"> قصص ومغامرات: </span>
                    <span style="font-family: cairo;">
                        نروي لك قصصًا ملهمة، ونشاركك في مغامراتنا الشيقة.
                    </span>
                </p>

            </div>
        </div>
    </section><!--/section-->


    <!--/section-->
@endsection

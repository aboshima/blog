<div class="content-wrapper">



    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @include('client.includes.alerts.success')
            @include('client.includes.alerts.error')
            @yield('content')
        </div>
    </div>
    <!--End  Main content -->

</div>

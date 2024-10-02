@if (Session::has('error'))
    <div id="hide_er" class="s_er" role="alert"
        style="padding: 10px; margin-bottom: 10px; border-radius: 10px; font-size: 20px; text-align: right;">
        <i class="far fa-check-circle"></i>
        {{ Session::get('error') }}
    </div>
@endif

<style>
    .s_er {
        color: white;
        background-color: rgb(191, 14, 14);
        animation-name: example2;
        animation-duration: 1s;
        opacity: .7;
    }


    @keyframes example2 {
        from {
            background-color: rgb(149, 149, 248);
        }

        to {
            background-color: rgb(238, 63, 101);
        }
    }
</style>

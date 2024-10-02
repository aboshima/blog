@if (Session::has('success'))
    <div id="hide" class="s mt-4" role="alert"
        style="padding: 10px; margin-bottom: 10px; border-radius: 10px; font-size: 20px; text-align: right;">
        <i class="fa fa-check-circle"></i>
        {{ Session::get('success') }}
    </div>
@endif

<style>
    .s {
        color: white;
        background-color: rgb(232, 181, 85);
        animation-name: example;
        animation-duration: 1s;
        opacity: .7;
    }

    @keyframes example {
        from {
            background-color: rgb(149, 149, 248);
        }

        to {
            background-color: green;
        }
    }
</style>

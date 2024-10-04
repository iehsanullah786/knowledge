<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Knowledge Hub</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href={{asset("images/favicon.ico")}}>
        <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap'); </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <div class="logo">
                    <a href="/">
    <img src="{{ asset('images/logo.png') }}" alt="logo">
</a>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.nav')

        @if(!isset($exception))
            <div class="searchfield bg-hed-six">
                <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
                    <div class="row text-center margin-bottom-20">
                        <h1 class="white">Aethon Knowledge Hub</h1>
                     
                    </div>
                </div>
            </div>
        @endif

        <div class="container featured-area-default padding-30">
            <div class="row">
                @yield('content')

                @if(!isset($exception))
                    @include('partials.sidebar')
                @endif
            </div>
        </div>

        @yield('about')

        @include('partials.footer')

        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>
    </body>
</html>
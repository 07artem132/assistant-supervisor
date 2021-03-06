<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assistant Supervisor</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-country-icon.css') }}">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .language_bar {
            position: absolute;
            left: 10px;
            top: 18px;
            font-family: initial;
        }

        .bottom-center {
            position: absolute;
            bottom: 0;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/fortawesome.js') }}" defer></script>
    <script src="{{ asset('js/language.js') }}" defer></script>

</head>
<body>
<div class="flex-center position-ref full-height">
    @include ('widget/language_select')
    @yield('language_bar')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">@lang('auth.Login')</a>
                <a href="{{ route('register') }}">@lang('auth.Register')</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Assistant Supervisor
        </div>
        <div class="links">
            <a href="https://github.com/07artem132/assistant-supervisor">GitHub</a>
        </div>
    </div>

    <footer class="bottom-center">
        <b style="font-weight: 600;">
            @version
        </b>
    </footer>
</div>
</body>
</html>

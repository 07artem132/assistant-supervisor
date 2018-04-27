<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assistant Supervisor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* ukraine */
        .ua {
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDgwMCI+DQo8cGF0aCBmaWxsPSIjM2E3NWM0IiBkPSJtMCwwaDEyMDB2ODAwaC0xMjAweiIvPg0KPHBhdGggZmlsbD0iI2Y5ZGQxNiIgZD0ibTAsNDAwaDEyMDB2NDAwaC0xMjAweiIvPg0KPC9zdmc+DQo=');
            width: 100%;
            height: 66.666666666667%;
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: left top;
        }

        /* russia */
        .ru {
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0NTAgMzAwIj4NCjxwYXRoIGZpbGw9IiNmZmYiIGQ9Im0wLDBoNDUwdjEwMGgtNDUweiIvPg0KPHBhdGggZmlsbD0iIzAwZiIgZD0ibTAsMTAwaDQ1MHYxMDBoLTQ1MHoiLz4NCjxwYXRoIGZpbGw9IiNmMDAiIGQ9Im0wLDIwMGg0NTB2MTAwaC00NTB6Ii8+DQo8L3N2Zz4NCg==');
            width: 100%;
            height: 66.666666666667%;
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: left top;
        }

        /* united_states */
        .us {
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjM1IDY1MCIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPg0KPGRlZnM+DQo8ZyBpZD0idSI+DQo8dXNlIHk9Ii0uMjE2IiB4bGluazpocmVmPSIjeDQiLz4NCjx1c2UgeGxpbms6aHJlZj0iI3g0Ii8+DQo8dXNlIHk9Ii4yMTYiIHhsaW5rOmhyZWY9IiNzNiIvPg0KPC9nPg0KPGcgaWQ9Ing0Ij4NCjx1c2UgeGxpbms6aHJlZj0iI3M2Ii8+DQo8dXNlIHk9Ii4wNTQiIHhsaW5rOmhyZWY9IiNzNSIvPg0KPHVzZSB5PSIuMTA4IiB4bGluazpocmVmPSIjczYiLz4NCjx1c2UgeT0iLjE2MiIgeGxpbms6aHJlZj0iI3M1Ii8+DQo8L2c+DQo8ZyBpZD0iczUiPg0KPHVzZSB4PSItLjI1MiIgeGxpbms6aHJlZj0iI3N0YXIiLz4NCjx1c2UgeD0iLS4xMjYiIHhsaW5rOmhyZWY9IiNzdGFyIi8+DQo8dXNlIHhsaW5rOmhyZWY9IiNzdGFyIi8+DQo8dXNlIHg9Ii4xMjYiIHhsaW5rOmhyZWY9IiNzdGFyIi8+DQo8dXNlIHg9Ii4yNTIiIHhsaW5rOmhyZWY9IiNzdGFyIi8+DQo8L2c+DQo8ZyBpZD0iczYiPg0KPHVzZSB4PSItLjA2MyIgeGxpbms6aHJlZj0iI3M1Ii8+DQo8dXNlIHg9Ii4zMTUiIHhsaW5rOmhyZWY9IiNzdGFyIi8+DQo8L2c+DQo8ZyBpZD0ic3RhciI+DQo8dXNlIHhsaW5rOmhyZWY9IiNwdCIgdHJhbnNmb3JtPSJtYXRyaXgoLS44MDkwMiAtLjU4Nzc5IC41ODc3OSAtLjgwOTAyIDAgMCkiLz4NCjx1c2UgeGxpbms6aHJlZj0iI3B0IiB0cmFuc2Zvcm09Im1hdHJpeCguMzA5MDIgLS45NTEwNiAuOTUxMDYgLjMwOTAyIDAgMCkiLz4NCjx1c2UgeGxpbms6aHJlZj0iI3B0Ii8+DQo8dXNlIHhsaW5rOmhyZWY9IiNwdCIgdHJhbnNmb3JtPSJyb3RhdGUoNzIpIi8+DQo8dXNlIHhsaW5rOmhyZWY9IiNwdCIgdHJhbnNmb3JtPSJyb3RhdGUoMTQ0KSIvPg0KPC9nPg0KPHBhdGggZmlsbD0iI2ZmZiIgaWQ9InB0IiBkPSJNLS4xNjI1LDAgMC0uNSAuMTYyNSwweiIgdHJhbnNmb3JtPSJzY2FsZSguMDYxNikiLz4NCjxwYXRoIGZpbGw9IiNiMjIyMzQiIGlkPSJzdHJpcGUiIGQ9Im0wLDBoMTIzNXY1MGgtMTIzNXoiLz4NCjwvZGVmcz4NCjxwYXRoIGZpbGw9IiNmZmYiIGQ9Im0wLDBoMTIzNXY2NTBoLTEyMzV6Ii8+DQo8dXNlIHhsaW5rOmhyZWY9IiNzdHJpcGUiLz4NCjx1c2UgeT0iMTAwIiB4bGluazpocmVmPSIjc3RyaXBlIi8+DQo8dXNlIHk9IjIwMCIgeGxpbms6aHJlZj0iI3N0cmlwZSIvPg0KPHVzZSB5PSIzMDAiIHhsaW5rOmhyZWY9IiNzdHJpcGUiLz4NCjx1c2UgeT0iNDAwIiB4bGluazpocmVmPSIjc3RyaXBlIi8+DQo8dXNlIHk9IjUwMCIgeGxpbms6aHJlZj0iI3N0cmlwZSIvPg0KPHVzZSB5PSI2MDAiIHhsaW5rOmhyZWY9IiNzdHJpcGUiLz4NCjxwYXRoIGZpbGw9IiMzYzNiNmUiIGQ9Im0wLDBoNDk0djM1MGgtNDk0eiIvPg0KPHVzZSB4bGluazpocmVmPSIjdSIgdHJhbnNmb3JtPSJtYXRyaXgoNjUwIDAgMCA2NTAgMjQ3IDE3NSkiLz4NCjwvc3ZnPg0K');
            width: 100%;
            height: 52.631578947368%;
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: left top;
        }

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

        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
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
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-left">
        <a href="{{ url('/setlocale/uk') }}" style="float: left;padding-left: 10px;"><span class="phoca-flag-flags ua"
                                                   style="width: 42px;height: 30px;display: block;"></span></a>
        <a href="{{ url('/setlocale/ru') }}" style="float: left;padding-left: 10px;"><span class="phoca-flag-flags ru"
                                                   style="width: 42px;height: 30px;display: block;"></span></a>
        <a href="{{ url('/setlocale/en') }}" style="float: left;padding-left: 10px;"><span class="phoca-flag-flags us"
                                                   style="width: 54px;height: 30px;display: block;"></span></a>

    </div>

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
            @version('full')
        </b>
    </footer>
</div>
</body>
</html>

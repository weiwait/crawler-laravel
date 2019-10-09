<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">
        <main>
            @yield('content')
        </main>

        <div class="row" style="position: fixed; bottom: 6px; width: 100%;">
            <div class="col-6">
                <a class="btn btn-default btn-block" href="/">crawler</a>
            </div>
            <div class="col-6">
                <a class="btn btn-block" href="{{url('fictions')}}">fictions</a>
            </div>
        </div>
    </div>
</body>
</html>

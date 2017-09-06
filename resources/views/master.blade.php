<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
<!-- 02 -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>@yield('title-block')</title>
    </head>
    <body>
        @include('inc.Header')
            @if(Request::is('/add-car'))
                @include('AddCar')
            @endif
            @yield('content')
        @include('inc.Footer')
    </body>
</html>

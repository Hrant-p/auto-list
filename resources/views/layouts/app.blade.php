<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>@yield('title-block')</title>
    </head>
    <body>
        @include('inc.header')
        @include('inc.messages')
        <div class="container">
            @yield('content')
        </div>
        @include('inc.footer')
    </body>
</html>

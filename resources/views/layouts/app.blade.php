<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Laravel Base Crud - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Laravel Base Crud description">

        {{-- FONTS --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

        {{-- CSS --}}
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

        {{-- JS --}}
        <script src=" {{ asset('js/app.js') }} " charset="utf-8"></script>
    </head>
    <body>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
  </head>
  <body>

    @include('partials.header')

    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')

    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>

{{-- Script --}}
<script src="{{ mix('js/app.js') }}" async></script>
@stack('script')
</html>
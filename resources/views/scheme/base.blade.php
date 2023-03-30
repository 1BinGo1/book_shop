<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Default title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>

<div class="container mx-auto">
    @yield('content', 'Default content')
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
@stack('scripts')
</body>
</html>

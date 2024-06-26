<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('adminlte.title') }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    @if(config('adminlte.use_custom_css'))
        <link rel="stylesheet" href="{{ asset(config('adminlte.custom_css')) }}">
    @endif
    @yield('adminlte_css')
</head>

<body class="hold-transition {{ config('adminlte.classes_body') }}">
    @yield('body')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @yield('adminlte_js')
</body>
</html>

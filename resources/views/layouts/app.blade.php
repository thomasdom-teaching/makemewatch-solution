<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">

    <title>@yield('title') | Make Me Watch</title>
</head>
<body class="w-full min-h-screen bg-black text-white flex flex-col">
<x-header/>
<main class="flex-1">
    @yield('content')
</main>
<x-footer />
</body>
</html>

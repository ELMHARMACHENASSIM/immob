<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

@if (Auth::user())
    <body class="font-sans antialiased {{ Auth::user()->darkmode ? ' bg-dark' : ' bg-white' }}">
@else
    <body class="font-sans antialiased ">
@endif
<!-- Page Heading -->
@livewire('Header')
<!-- Page Content -->
@if (Auth::user())
    <main class="{{ Auth::user()->darkmode ? ' text-white' : ' text-dark' }}">
@else
    <main class="">
@endif
{{ $slot }}
</main>
@stack('modals')
@livewireScripts
</body>
</html>

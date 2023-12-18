<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Avito</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-[100%]">
        <div class="h-screen min-h-[100%] bg-white flex flex-col">
            <!-- Page Heading -->
            @if (isset($header))
                {{ $header }}
            @endif
            <!-- Page Nav -->
            @if (isset($nav))
                {{ $nav }}
            @endif
            <!-- Page Breadcrumbs -->
            @if (isset($breadcrumbs))
                {{ $breadcrumbs }}
            @endif
            <!-- Page Section -->
            @if (isset($section))
                {{ $section }}
            @endif
            <!-- Page Content -->
            <main class="flex-auto">
                {{ $slot }}
            </main>
            <!-- Page Footer -->
            @include('includes.footer')
        </div>
    </body>
</html>

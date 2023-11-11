<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('blocks.index.styles')
    <title>Avito Lite</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
           @include('blocks.index.header-top')
           @include('blocks.index.header-middle')
           @include('blocks.index.header-bottom')
</header>
        <main class="main">
            <div class="container">
               @yield('content')
            </div>
        </main>
    </div>
    @include('blocks.index.footer')
    </div>
    @include('blocks.index.scripts')
</body>
</html>

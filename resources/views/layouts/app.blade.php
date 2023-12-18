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
            <!-- Page Section -->
            @if (isset($section))
                {{ $section }}
            @endif
            <!-- Page Content -->
            <main class="flex-auto">
                {{ $slot }}
            </main>
            <!-- Page Footer -->
            <footer class="bg-black mt-2">
                <div class="container max-w-4xl mx-auto">
                    <div class="flex justify-between text-sm py-2">
                        <div class="">
                            <span class="text-white">{{ date('Y') }} &copy; Avito LLC</span>
                        </div>
                        <div class="">
                            <ul class="flex space-x-2 text-white">
                                <li>
                                    <x-footer.link>Information</x-footer.link>
                                </li>
                                <li>
                                    <x-footer.link>Career</x-footer.link>
                                </li>
                                <li>
                                    <x-footer.link>Press</x-footer.link>
                                </li>
                                <li>
                                    <x-footer.link>About</x-footer.link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

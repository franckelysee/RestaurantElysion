<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script>

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        <style>
            html {
                background-color: oklch(1 0 0);
            }

            html.dark {
                background-color: oklch(0.145 0 0);
            }
        </style>
        <title>@yield('title')</title>

        {{-- <title inertia>{{ config('app.name', 'Laravel') }}</title> --}}

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @routes
        @vite(['resources/js/app.ts'])
        {{-- @inertiaHead --}}
    </head>
    <body class="font-sans antialiased">
        <header class="dark:text-[#efe7d2] bg-white " style="background-color: #1C2526;">
            @include('layouts.header')
        </header>
        <main class="main-content">
            @yield('content')
            <script src="{{ asset('js/utils/fade-in.js') }}"></script>
        </main>
        @include('layouts.footer')
    </body>
</html>

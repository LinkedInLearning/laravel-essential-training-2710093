<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased min-h-screen grid place-items-center">
        @if (Route::has('login'))
        <div class="absolute top-0 right-0 p-6">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="text-indigo-600 hover:text-indigo-800"
                    >
                        Dashboard
                    </a>
                @else
                
                    <a
                        href="{{ route('login') }}"
                        class="text-indigo-600 hover:text-indigo-800 mr-4"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="text-indigo-600 hover:text-indigo-800"
                        >
                            Register
                        </a>
                    @endif
                @endauth

                </div>
        @endif
        <h1 class="text-7xl">LiteNotes</h1>
    </body>
</html>

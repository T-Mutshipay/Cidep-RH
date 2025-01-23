<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Add your custom styles here */
            </style>
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 min-h-screen flex flex-col lg:flex-row">
            <div class="lg:w-1/2 flex items-center justify-center p-6 bg-white dark:bg-gray-800">
                <img id="background" class="max-w-[877px]" src="{{ asset('img/ECIDEP.jpg') }}" alt="ecidep image"/>
            </div>
            <div class="lg:w-1/2 flex flex-col items-center justify-center p-6 bg-gray-100 dark:bg-gray-900">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2 space-x-2">
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black bg-white ring-1 ring-transparent transition hover:bg-gray-200 hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black bg-white ring-1 ring-transparent transition hover:bg-gray-200 hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Register
                                </a>
                            @endif
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </body>
</html>

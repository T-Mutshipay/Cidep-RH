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
    <body class="font-sans antialiased dark:bg-gray-900 dark:text-gray-300">
        <div class="bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col lg:flex-row">
            <!-- Left Section (Image) -->
            <div class="lg:w-1/2 flex items-center justify-center p-6 bg-white dark:bg-gray-800">
                <img id="background" class="max-w-full rounded-lg shadow-lg" src="{{ asset('img/ECIDEP.jpg') }}" alt="ECIDEP image" />
            </div>
    
            <!-- Right Section (Content) -->
            <div class="lg:w-1/2 flex flex-col items-center justify-center p-6 bg-gray-100 dark:bg-gray-900">
                <div class="relative w-full max-w-2xl px-6">
                    <!-- Header -->
                    <header class="grid grid-cols-1 lg:grid-cols-3 items-center gap-4 py-10">
                        <div class="flex justify-center lg:col-start-2 space-x-4">
                            <!-- Login Button -->
                            <a href="{{ route('login') }}" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-6 py-3 transition duration-200 transform hover:-translate-y-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Se connecter
                            </a>
            
                            <!-- Register Button -->
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-6 py-3 transition duration-200 transform hover:-translate-y-1 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    S'inscrire
                                </a>
                            @endif
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </body>
    
</html>

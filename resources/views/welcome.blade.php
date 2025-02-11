<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECIDEP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            .hover-scale {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .hover-scale:hover {
                transform: scale(1.02);
                box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.2);
            }
            .button-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .button-hover:hover {
                transform: translateY(-2px);
                filter: brightness(110%);
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .fade-in {
                animation: fadeIn 0.8s ease-out forwards;
            }
        </style>
    @endif
</head>
<body class="font-sans antialiased dark:bg-gray-900 dark:text-gray-300">
    <div class="bg-gradient-to-br from-gray-50 to-gray-200 dark:from-gray-900 dark:to-gray-800 min-h-screen flex flex-col lg:flex-row">
        <div class="lg:w-1/3 flex items-center justify-center p-6 lg:p-8 bg-gradient-to-tr from-white to-gray-100 dark:from-gray-800 dark:to-gray-700 lg:border-r-2 border-gray-200 dark:border-gray-700">
            <div class="relative w-full max-w-xl overflow-hidden rounded-xl shadow-lg hover-scale group">
                <img id="background" 
                    class="p-6 w-full max-h-80 md:max-h-80 lg:max-h-96 object-cover rounded-xl transform transition-all duration-500 group-hover:scale-105" 
                    src="{{ asset('img/ECIDEP.jpg') }}" 
                    alt="ECIDEP image"
                    loading="lazy"
                    onload="this.classList.add('loaded')"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>

        <div class="lg:w-2/3 flex flex-col items-center justify-center p-4 lg:p-8">
            <div class="w-full max-w-2xl px-4 lg:px-12 fade-in">
                <!-- Header -->
                <header class="flex flex-col items-center space-y-8 py-8 lg:py-12">
                    <h1 class="text-4xl lg:text-5xl font-bold text-center text-gray-800 dark:text-white mb-4">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-green-500">
                            Bienvenue sur ECIDEP
                        </span>
                    </h1>
                    
                    <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                        <!-- Login Button -->
                        <a href="{{ route('login') }}" 
                           class="button-hover flex-1 text-center text-white bg-gradient-to-br from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 focus:ring-4 focus:ring-blue-300 font-semibold rounded-xl text-lg px-8 py-4 shadow-lg shadow-blue-500/20 dark:shadow-blue-900/30 transition-all">
                            Se connecter
                        </a>
        
                        <!-- Register Button -->
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="button-hover flex-1 text-center text-white bg-gradient-to-br from-green-600 to-green-500 hover:from-green-700 hover:to-green-600 focus:ring-4 focus:ring-green-300 font-semibold rounded-xl text-lg px-8 py-4 shadow-lg shadow-green-500/20 dark:shadow-green-900/30 transition-all">
                                S'inscrire
                            </a>
                        @endif
                    </div>

                    <p class="text-center text-gray-600 dark:text-gray-400 mt-6 text-sm lg:text-base">
                        Déjà membre? 
                        <a href="{{ route('login') }}" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
                            Accédez à votre espace
                        </a>
                    </p>
                </header>
            </div>
        </div>
    </div>
</body>
</html>
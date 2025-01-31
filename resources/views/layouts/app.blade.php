<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer class="bg-gray-800 text-white py-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Grid Layout -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Section 1: Logo & Description -->
                        <div>
                            <h2 class="text-xl font-bold mb-4">Gestion RH</h2>
                            <p class="text-gray-400 text-sm">
                                Simplifiez la gestion de vos ressources humaines avec notre application intuitive et performante.
                            </p>
                        </div>
            
                        <!-- Section 2: Liens utiles -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
                            <ul class="space-y-2 text-sm">
                                <li>
                                    <a href="{{ route('agents.index') }}" class="hover:underline text-gray-400">Gestion des Agents</a>
                                </li>
                                <li>
                                    <a href="{{ route('services.index') }}" class="hover:underline text-gray-400">Gestion des Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('directions.index') }}" class="hover:underline text-gray-400">Gestion des Directions</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline text-gray-400">Gestion des Utilisateurs</a>
                                </li>
                            </ul>
                        </div>
            
                        <!-- Section 3: Support -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Support</h3>
                            <ul class="space-y-2 text-sm">
                                <li>
                                    <a href="#" class="hover:underline text-gray-400">FAQ</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline text-gray-400">Assistance</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline text-gray-400">Conditions d'utilisation</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline text-gray-400">Politique de confidentialité</a>
                                </li>
                            </ul>
                        </div>
            
                        <!-- Section 4: Contact -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Contact</h3>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center space-x-2">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                    <span>contact@gestionrh.com</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <i class="fas fa-phone text-gray-400"></i>
                                    <span>+33 1 23 45 67 89</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <i class="fas fa-map-marker-alt text-gray-400"></i>
                                    <span>10 Rue des RH, Paris</span>
                                </li>
                            </ul>
                        </div>
                    </div>
            
                    <!-- Divider -->
                    <div class="mt-8 border-t border-gray-700 pt-6 text-center">
                        <p class="text-sm text-gray-400">
                            © {{ date('Y') }} Gestion RH. Tous droits réservés.
                        </p>
                    </div>
                </div>
            </footer>
            
        </div>
    </body>
</html>

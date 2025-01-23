<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-gray-100 mb-8">
                Bienvenue dans l'Application de Gestion RH
            </h1>
    
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card: Gestion des Agents -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-red-500 p-3 rounded-full text-white">
                            <i class="fas fa-user"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            Gestion des Agents
                        </h3>
                    </div>
                    <div class="m-4">
                        <p class="text-gray-600 dark:text-gray-400 mt-2">
                            Ajouter, modifier ou consulter les informations des agents.
                        </p>
                    </div>
                    <a href="{{route('agents.index')}}" class="mt-8 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                        Accéder
                    </a>
                </div>
    
                <!-- Card: Gestion des Services -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-yellow-500 p-3 rounded-full text-white">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            Gestion des Services
                        </h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        Créer, modifier ou supprimer des services dans l'école.
                    </p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                        Accéder
                    </button>
                </div>
    
                <!-- Card: Gestion des Directions -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-500 p-3 rounded-full text-white">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            Gestion des Directions
                        </h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        Ajouter et gérer les directions de l'établissement.
                    </p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                        Accéder
                    </button>
                </div>
    
                <!-- Card: Gestion des Utilisateurs -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-red-500 p-3 rounded-full text-white">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            Gestion des Utilisateurs
                        </h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        Gérer les rôles et droits des utilisateurs.
                    </p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                        Accéder
                    </button>
                </div>
    
                <!-- Card: Rapports et Statistiques -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-yellow-500 p-3 rounded-full text-white">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            Gestion des Grades
                        </h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        {{-- Visualiser les grade sur les ressources humaines. --}}
                    </p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                        Accéder
                    </button>
                </div>
    
                <!-- Card: Gestion des Formations -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-red-500 p-3 rounded-full text-white">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            Gestion des Formations
                        </h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        Gérer les programmes de formation pour les employés.
                    </p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                        Accéder
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
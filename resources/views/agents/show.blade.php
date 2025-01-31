<x-app-layout>
    @if (session('success'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('error') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif
    <div class="flex justify-end m-1">
        <a href="{{ route('agents.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            
        </a>
    </div>
    <div class="py-10 bg-gray-100">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-blue-600 h-32 relative">
                <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2">
                    <div class="flex justify-center">
                        <div class="bg-white p-3 rounded-full border-4 border-blue-600 shadow-lg">
                            <i class="fas fa-user text-blue-600 text-5xl"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center px-6 py-6">
                <h1 class="text-3xl font-bold text-gray-800 uppercase tracking-wide">{{ $agent->nom }} {{ $agent->postnom }} {{ $agent->prenom }}</h1>
                <p class="text-sm text-gray-500 mt-2">Matricule : <span class="font-semibold text-gray-800">{{ $agent->matricule }}</span></p>
            </div>
            <div class="flex justify-between px-2 m-12 py-4 border-t border-gray-200">
                <div>
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Informations personnelles</h2>
                    <div class="space-y-2 text-gray-600">
                        <p><strong>Date de Naissance :</strong> <span class="font-medium">{{ $agent->date_naissance }}</span></p>
                        <p><strong>Adresse :</strong> <span class="font-medium">{{ $agent->adresse }}</span></p>
                        <p><strong>Téléphone :</strong> <span class="font-medium">{{ $agent->telephone }}</span></p>
                        <p><strong>Email :</strong> <span class="font-medium">{{ $agent->email }}</span></p>
                    </div>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Informations professionnelles</h2>
                    <div class="space-y-2 text-gray-600">
                        <p><strong>Date d'engagement :</strong> <span class="font-medium">{{ $agent->date_engagement }}</span></p>
                        <p><strong>Domaine :</strong> <span class="font-medium">{{ $agent->domaine->nom_domaine }}</span></p>
                        <p><strong>Niveau d'étude :</strong> <span class="font-medium">{{ $agent->niveau }}</span></p>
                        <p><strong>État :</strong> <span class="font-medium">{{ $agent->type_etat}}</span></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-4 p-4">
            <button data-modal-target="modal_mutation" data-modal-toggle="modal_mutation" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-all">
                Mutation
            </button>
            <button data-modal-target="modal_affectation" data-modal-toggle="modal_affectation" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-all">
                Affectation
            </button>
            <button data-modal-target="grade-modal" data-modal-toggle="grade-modal" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-all">
                Gradé
            </button>
            <button data-modal-target="modal_fonction" data-modal-toggle="modal_fonction" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-all">
                Fonction
            </button>
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-all">
                Niveau d'études
            </button>
        </div>
    </div>
    
    <x-options/>
    <x-mutation :agent="$agent" />
    <x-affectation :agent="$agent" />
    <x-grade :agent="$agent" />
    <x-fonction :agent="$agent" />
    <x-niveau-etude :agent="$agent" />

</x-app-layout>
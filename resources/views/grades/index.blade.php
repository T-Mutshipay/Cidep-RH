<x-app-layout>
    <div class="flex justify-end m-4">
        <a href="{{ route('agents.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            
        </a>
    </div>
    @if(session('success'))
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
    @if(session('error'))
        <div id="alert-4" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
        {{ session('error') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-4" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
        </div>
    @endif
    <div class="m-12">

        <h1 class="text-xl font-bold">Gestion des grades</h1>
    
        <button id="toggleForm" class="mt-4 mb-4 text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
            Ajouter un grade
        </button>
    
       <!-- Formulaire de création -->
        <div id="createForm" class="hidden m-10">
            <h2 class="text-lg font-semibold">Créer un grade</h2>
            <form action="{{ route('grades.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nom_grade" class="block">Nom du grade:</label>
                    <input type="text" name="nom_grade" id="nom_grade" required class="border rounded p-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="code_grade" class="block">Code du grade:</label>
                    <input type="text" name="code_grade" id="code_grade" required class="border rounded p-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="type_grade_id" class="block">Type de grade:</label>
                    <select name="type_grade_id" id="type_grade_id" required class="border rounded p-2 w-full">
                        <option value="">Sélectionnez un type</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->nom_type_grade }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">Créer</button>
            </form>
        </div>

    
        <!-- Tableau des grades -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nom</th>
                        <th scope="col" class="px-6 py-3">Code</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $grade)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $grade->nom_grade }}
                            </th>
                            <td class="px-6 py-4">{{ $grade->code_grade }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('grades.edit', $grade->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <i class="fas fa-edit"></i> Éditer
                                </a>
                                
                                <button type="button" 
                                    data-url="{{ route('grades.destroy', $grade->id) }}" 
                                    onclick="supprimer(event);"
                                    data-modal-target="popup-modal" 
                                    data-modal-toggle="popup-modal"
                                    data-message="Êtes-vous sûr de vouloir supprimer le grade de {{ $grade->nom_grade }} ?"
                                    class="font-medium text-red-500 ml-2">
                                    <i class="fas fa-trash-alt"></i> Supprimer
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <x-delete-component/>

    <script>

        document.getElementById('toggleForm').addEventListener('click', function() {
            const form = document.getElementById('createForm');
            form.classList.toggle('hidden');
        });
    </script>
</x-app-layout>
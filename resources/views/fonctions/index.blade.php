<x-app-layout>
    <div class="flex justify-end m-4">
        <a href="{{ route('agents.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            
        </a>
    </div>
    <div class="py-6 m-10">
        <h1 class="text-2xl font-semibold mb-4">Liste des Fonctions</h1>

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
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nom de la Fonction</th>
                        <th scope="col" class="px-6 py-3">Code de la Fonction</th>
                        <th scope="col" class="px-6 py-3">Détail de la Fonction</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fonctions as $fonction)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4">{{ $fonction->Nom_fonction}}</td>
                            <td class="px-6 py-4">{{ $fonction->Code_fonction }}</td>
                            <td class="px-6 py-4">{{ $fonction->Detail_fonction}}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                
                                <button type="button" 
                                    data-url="{{ route('fonctions.destroy', $fonction->id) }}" 
                                    onclick="supprimer(event);"
                                    data-modal-target="popup-modal" 
                                    data-modal-toggle="popup-modal"
                                    data-message="Êtes-vous sûr de vouloir supprimer cette fonction {{ $fonction->nom_direction }} ?"
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

    <div id="form_fonction" class="m-10 hidden">
        <h1 class="text-2xl font-semibold">Créer une nouvelle Fonction</h1>

        <form action="{{ route('fonctions.store') }}" method="POST" class="space-y-6 mt-6">
            @csrf
        
            <div>
                <label for="nom_fonction" class="block text-sm font-medium text-gray-700">Nom de la Fonction</label>
                <input type="text" name="nom_fonction" id="nom_fonction" placeholder="Entrez le nom de la fonction"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
            </div>
        
            <div>
                <label for="code_fonction" class="block text-sm font-medium text-gray-700">Code de la Fonction</label>
                <input type="text" name="code_fonction" id="code_fonction" placeholder="Entrez le code de la fonction"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
            </div>
        
            <div>
                <label for="detail_fonction" class="block text-sm font-medium text-gray-700">Détail de la Fonction</label>
                <textarea name="detail_fonction" id="detail_fonction" placeholder="Entrez le détail de la fonction"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required></textarea>
            </div>
        
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    <i class="fas fa-check-circle mr-2"></i>Créer la fonction
                </button>
            </div>
        </form>
    </div>
    <x-delete-component/>
    <script>
        document.getElementById('active').addEventListener('click', function () {
            const formContainer = document.getElementById('form_fonction');
            formContainer.classList.toggle('hidden');
        });
    </script>
</x-app-layout>
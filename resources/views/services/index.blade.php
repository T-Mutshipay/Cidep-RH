<x-app-layout>
    <div class="flex justify-end m-4">
        <a href="{{ route('agents.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Retour en arrière
        </a>
    </div>
    <div class="m-4">
        <h1 class="text-xl font-bold">Liste des Services</h1>
        
        <!-- Bouton pour afficher le formulaire de création -->
        <button id="toggleForm" class="mt-4 mb-4 text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
            Créer un Service
        </button>
    
        <!-- Formulaire de création -->
        <div id="createForm" class="hidden m-12 p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4">Créer un Service</h2>
            <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nom_service" class="block text-gray-700">Nom du Service:</label>
                <input type="text" name="nom_service" id="nom_service" required class="border rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="code_service" class="block text-gray-700">Code du Service:</label>
                <input type="text" name="code_service" id="code_service" required class="border rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="detail_service" class="block text-gray-700">Détails:</label>
                <textarea name="detail_service" id="detail_service" class="border rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <button type="submit" class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">Créer</button>
            </form>
        </div>
        <!-- Tableau des services -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nom</th>
                        <th scope="col" class="px-6 py-3">Code</th>
                        <th scope="col" class="px-6 py-3">Détails</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $service->nom_service }}
                            </th>
                            <td class="px-6 py-4">{{ $service->code_service }}</td>
                            <td class="px-6 py-4">{{ $service->detail_service }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('services.edit', $service->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Éditer
                                </a>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-500 dark:text-red-400 hover:underline ml-2">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('toggleForm').addEventListener('click', function() {
            const form = document.getElementById('createForm');
            form.classList.toggle('hidden');
        });
    </script>
</x-app-layout>
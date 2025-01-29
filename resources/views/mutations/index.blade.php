<x-app-layout>
    <div class="flex justify-end m-4">
        <a href="{{ route('agents.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            
        </a>
    </div>
    <div class="m-10">
        <h1 class="text-xl font-bold">Gestion des Mutations</h1>
    
        <!-- Bouton pour afficher le formulaire -->
        {{-- <button id="toggleForm" class="mt-4 mb-4 text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
            Ajouter une Mutation
        </button> --}}
    
        {{-- <!-- Formulaire de création -->
        <div id="createForm" class="hidden">
            <h2 class="text-lg font-semibold">Créer une Mutation</h2>
            <form action="{{ route('mutations.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="agent_id" class="block">Agent:</label>
                    <select name="agent_id" id="agent_id" required class="border rounded p-2 w-full">
                        @foreach($agents as $agent)
                            <option value="{{ $agent->id }}">{{ $agent->nom }} {{ $agent->postnom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="direction_id" class="block">Direction:</label>
                    <select name="direction_id" id="direction_id" required class="border rounded p-2 w-full">
                        @foreach($directions as $direction)
                            <option value="{{ $direction->id }}">{{ $direction->nom_direction }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="date_mutation" class="block">Date de Mutation:</label>
                    <input type="date" name="date_mutation" id="date_mutation" required class="border rounded p-2 w-full">
                </div>
                <button type="submit" class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">Créer</button>
            </form>
        </div> --}}
    </div>
    <div class="m-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center mb-4">
                <div id="searchable-container" class="flex-1 mr-4"></div>
                <div id="sortable-container" class="flex-1"></div>
            </div>
            <table id="search-table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Agent</th>
                        <th scope="col" class="px-6 py-3">Direction</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Date de Mutation</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mutations as $mutation)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{ $mutation->agent->nom }} {{ $mutation->agent->postnom }}
                            </th>
                            <td class="px-6 py-4">{{ $mutation->direction->nom_direction }}</td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $mutation->date_mutation }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('mutations.edit', $mutation->id) }}" class="text-blue-500">Éditer</a>
                                <form action="{{ route('mutations.destroy', $mutation->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 ml-2">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        //data table script//
        const dataTable = new simpleDatatables.DataTable("#search-table", {
            searchable: true,
            sortable: true
        });
        // document.getElementById('toggleForm').addEventListener('click', function() {
        //     const form = document.getElementById('createForm');
        //     form.classList.toggle('hidden');
        // });

            
    </script>
</x-app-layout>
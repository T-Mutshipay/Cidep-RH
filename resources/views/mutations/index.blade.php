<x-app-layout>
    <div class="m-10">
        <h1 class="text-xl font-bold">Gestion des Mutations</h1>
    
        <!-- Bouton pour afficher le formulaire -->
        <button id="toggleForm" class="mt-4 mb-4 text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
            Ajouter une Mutation
        </button>
    
        <!-- Formulaire de création -->
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
        </div>
    </div>
    <div class="m-10">
        <table id="search-table" class="min-w-full border-collapse border border-gray-200 mt-4">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Agent</th>
                    <th class="border border-gray-300 p-2">Direction</th>
                    <th class="border border-gray-300 p-2">Date de Mutation</th>
                    <th class="border border-gray-300 p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mutations as $mutation)
                    <tr class="bg-gray-100 hover:bg-gray-200">
                        <td class="border border-gray-300 p-2">{{ $mutation->agent->nom }} {{ $mutation->agent->postnom }}</td>
                        <td class="border border-gray-300 p-2">{{ $mutation->direction->nom_direction }}</td>
                        <td class="border border-gray-300 p-2">{{ $mutation->date_mutation }}</td>
                        <td class="border border-gray-300 p-2">
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
    <script>
        document.getElementById('toggleForm').addEventListener('click', function() {
            const form = document.getElementById('createForm');
            form.classList.toggle('hidden');
        });

        //data table scrip//
            const dataTable = new simpleDatatables.DataTable("#search-table", {
                searchable: false,
                sortable: false
            });
            
    </script>
</x-app-layout>
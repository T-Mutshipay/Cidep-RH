<x-app-layout>
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold mb-4">Liste des Affectations</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 my-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('affectations.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                Ajouter une Affectation
            </a>
        </div>

        <table class="min-w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Agent</th>
                    <th class="border border-gray-300 px-4 py-2">Service</th>
                    <th class="border border-gray-300 px-4 py-2">Date d'Affectation</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($affectations as $affectation)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $affectation->agent->nom }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $affectation->service->nom }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $affectation->date_affectation }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('affectations.edit', $affectation->id) }}" class="text-yellow-500">Modifier</a>
                            |
                            <form action="{{ route('affectations.destroy', $affectation->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

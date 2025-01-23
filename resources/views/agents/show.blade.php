<x-app-layout>
    <div class="py-10 bg-gray-100">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-blue-600 h-32"></div>
            <div class="flex justify-center -mt-16">
                <div class="bg-white p-3 rounded-full border-4 border-blue-600">
                    <i class="fas fa-user text-blue-600 text-5xl"></i>
                </div>
            </div>
            <div class="text-center px-6 py-4">
                <h1 class="text-2xl font-bold text-gray-800 uppercase">{{ $agent->nom }} {{ $agent->postnom }} {{ $agent->prenom }}</h1>
                <p class="text-sm text-gray-500 mt-2">Matricule : {{ $agent->matricule }}</p>
            </div>
            <div class="px-6 py-4 border-t">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Informations personnelles</h2>
                <div class="space-y-2 text-gray-600">
                    <p><strong>Date de Naissance :</strong> {{ $agent->date_naissance }}</p>
                    <p><strong>Adresse :</strong> {{ $agent->adresse }}</p>
                    <p><strong>Téléphone :</strong> {{ $agent->telephone }}</p>
                    <p><strong>Email :</strong> {{ $agent->email }}</p>
                </div>
            </div>
            <div class="px-6 py-4 border-t">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Informations professionnelles</h2>
                <div class="space-y-2 text-gray-600">
                    <p><strong>Date d'engagement :</strong> {{ $agent->date_engagement }}</p>
                    <p><strong>Domaine :</strong> {{ $agent->domaine->nom_domaine }}</p>
                    <p><strong>Niveau d'étude :</strong> {{ $agent->niveau->nom_niveau }}</p>
                    <p><strong>État :</strong> {{ $agent->etat->nom_etat }}</p>
                </div>
            </div>
            <div class="px-6 py-4 text-center">
                <a href="{{ route('agents.edit', $agent->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    <i class="fas fa-edit mr-2"></i>Modifier
                </a>
                {{-- <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" class="inline-block" 
                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet agent ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                        <i class="fas fa-trash-alt mr-2"></i>Supprimer
                    </button>
                </form> --}}
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class=" py-6 m-10">
        <h1 class="text-2xl font-semibold mb-4">Liste des Agents</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 my-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="my-4">
            <button id="active"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                <i class="fas fa-plus mr-2"></i>Créer un nouvel agent
            </button>
        </div>
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left border border-gray-300">Matricule</th>
                        <th class="px-4 py-2 text-left border border-gray-300">Nom</th>
                        <th class="px-4 py-2 text-left border border-gray-300">Postnom</th>
                        <th class="px-4 py-2 text-left border border-gray-300">Prénom</th>
                        <th class="px-4 py-2 text-left border border-gray-300">Niveau d'étude</th>
                        <th class="px-4 py-2 text-left border border-gray-300">Domaines</th>
                        <th class="px-4 py-2 text-left border border-gray-300">Date d'engagement</th>
                        <th class="px-4 py-2 text-left border border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agents as $agent)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{ $agent->matricule }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $agent->nom }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $agent->postnom }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $agent->prenom }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $agent->niveau->nom_niveau}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $agent->domaine->nom_domaine}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $agent->date_engagement }}</td>
                            <td class="px-4 py-2 border border-gray-300 flex space-x-2">
                                <a href="{{ route('agents.show', $agent->id) }}" 
                                   class="text-blue-500 hover:text-blue-700 transition">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('agents.show', $agent->id) }}" 
                                   class="text-yellow-500 hover:text-yellow-700 transition">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                  </svg>
                                  
                                </a>

                                <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" 
                                      class="inline-block"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet agent ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 transition">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="form_agent" class=" m-10 hidden">
        <h1 class="text-2xl font-semibold">Créer un nouvel Agent</h1>

        <form action="{{ route('agents.store') }}" method="POST" class="space-y-6 mt-6">
            @csrf
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="matricule" class="block text-sm font-medium text-gray-700">Matricule</label>
                    <input type="text" name="matricule" id="matricule" placeholder="Entrez le matricule"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
        
                <div>
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Entrez le nom"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
            </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="postnom" class="block text-sm font-medium text-gray-700">Postnom</label>
                    <input type="text" name="postnom" id="postnom" placeholder="Entrez le postnom"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
        
                <div>
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez le prénom"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
            </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="date_engagement" class="block text-sm font-medium text-gray-700">Date d'engagement</label>
                    <input type="date" name="date_engagement" id="date_engagement"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label for="date_naissance" class="block text-sm font-medium text-gray-700">Date de Naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
            </div>
        
            <div>
                <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                <input type="text" name="adresse" id="adresse" placeholder="Entrez l'adresse"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
            </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input type="text" name="telephone" id="telephone" placeholder="Entrez le numéro de téléphone"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
        
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" placeholder="Entrez l'adresse email"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                </div>
            </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="domaine_id" class="block text-sm font-medium text-gray-700">Domaine</label>
                    <select name="domaine_id" id="domaine_id" 
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="" disabled selected>Choisissez un domaine</option>
                        @foreach ($domaines as $domaine)
                            <option value="{{ $domaine->id }}">{{ $domaine->nom_domaine }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div>
                    <label for="niveau_id" class="block text-sm font-medium text-gray-700">Niveau</label>
                    <select name="niveau_id" id="niveau_id" 
                        class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="" disabled selected>Choisissez un niveau</option>
                        @foreach ($niveaux as $niveau)
                            <option value="{{ $niveau->id }}">{{ $niveau->nom_niveau }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        
            <div>
                <label for="etat_id" class="block text-sm font-medium text-gray-700">État</label>
                <select name="etat_id" id="etat_id"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="" disabled selected>Choisissez un état</option>
                    @foreach ($etats as $etat)
                        <option value="{{ $etat->id }}">{{ $etat->nom_etat }}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    <i class="fas fa-check-circle mr-2"></i>Créer l'agent
                </button>
            </div>
        </form>
        
    </div>
    <script>
        document.getElementById('active').addEventListener('click', function () {
            const formContainer = document.getElementById('form_agent');
            formContainer.classList.toggle('hidden');
        });
    </script>
</x-app-layout>

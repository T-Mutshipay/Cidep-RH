<x-app-layout>
    <div class="flex justify-end m-4">
        <a href="{{ route('index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </a>
    </div>
    <div class="m-2">
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
    </div>
    <div class=" py-6 m-10">        
        <div id="form_agent" class="hidden">
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
                            class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500">
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
                        <label for="niveau_etude_id" class="block text-sm font-medium text-gray-700">Niveau</label>
                        <select name="niveau_etude_id" id="niveau_etude_id" 
                            class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="" disabled selected>Choisissez un niveau</option>
                            @foreach ($niveaux as $niveau)
                                <option value="{{ $niveau->id }}">{{ $niveau->nom_niveau }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
        
                <div>
                    <label for="type_etat_id" class="block text-sm font-medium text-gray-700">État</label>
                    <select name="type_etat_id" id="type_etat_id"
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

        <div class="my-4">
            <button id="active"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                <i class="fas fa-plus mr-2"></i>Créer un nouvel agent
            </button>
        </div>
        <h1 class="text-2xl font-semibold mb-4 flex justify-center">Liste des Agents</h1>

        <!-- Ajout du CSS DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="agentsTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-300 dark:bg-gray-800">Matricule</th>
                        <th scope="col" class="px-6 py-3">Nom</th>
                        <th scope="col" class="px-6 py-3 bg-gray-300 dark:bg-gray-800">Postnom</th>
                        <th scope="col" class="px-6 py-3">Prénom</th>
                        <th scope="col" class="px-6 py-3 bg-gray-300 dark:bg-gray-800">Niveau d'étude</th>
                        <th scope="col" class="px-6 py-3">Domaines</th>
                        <th scope="col" class="px-6 py-3 bg-gray-300 dark:bg-gray-800">Date d'engagement</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agents as $agent)
                    <tr class="bg-white border-b border-gray-500 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $agent->matricule }}</td>
                        <td class="px-6 py-4">{{ $agent->nom }}</td>
                        <td class="px-6 py-4">{{ $agent->postnom }}</td>
                        <td class="px-6 py-4">{{ $agent->prenom }}</td>
                        <td class="px-6 py-4">{{ $agent->niveau }}</td>
                        <td class="px-6 py-4">{{ $agent->domaine->nom_domaine }}</td>
                        <td class="px-6 py-4">{{ $agent->date_engagement }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('agents.show', $agent->id) }}" class="font-medium text-yellow-500 dark:text-yellow-400 hover:underline">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('agents.destroy', $agent->id) }}"
                                onclick="supprimer(event);"
                                data-modal-target="popup-modal" 
                                data-modal-toggle="popup-modal"
                                data-message="vous allez supprimer l'agent {{$agent->nom}} {{$agent->postnom}} ?"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                    <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <x-delete-component/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        
        <script>
            $(document).ready(function () {
                $('#agentsTable').DataTable({
                    "language": {
                        "lengthMenu": "Afficher _MENU_ entrées",
                        "zeroRecords": "Aucun agent trouvé",
                        "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                        "infoEmpty": "Aucune entrée disponible",
                        "infoFiltered": "(filtré à partir de _MAX_ entrées)",
                        "search": "Rechercher :",
                        "paginate": {
                            "first": "Premier",
                            "last": "Dernier",
                            "next": "Suivant",
                            "previous": "Précédent"
                        }
                    },
                    "paging": true,
                    "ordering": true,
                    "info": true
                });
            });
        </script>
    <script>
        document.getElementById('active').addEventListener('click', function () {
            const formContainer = document.getElementById('form_agent');
            formContainer.classList.toggle('hidden');
            
        });
    </script>
</x-app-layout>

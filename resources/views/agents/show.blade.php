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
                {{-- <a href="{{ route('agents.edit', $agent->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    <i class="fas fa-edit mr-2"></i>Modifier
                </a> --}}   
                {{-- <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" class="inline-block" 
                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet agent ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                        <i class="fas fa-trash-alt mr-2"></i>Supprimer
                    </button>
                </form> --}}
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Toggle modal
                </button>
            </div>
        </div>
    </div>
    <x-options/>

</x-app-layout>
{{-- <div class="mb-10">

    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select your country</label>
        <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Profile</option>
            <option>Dashboard</option>
            <option>setting</option>
            <option>Invoioce</option>
        </select>
    </div>
    <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow-sm sm:flex dark:divide-gray-700 dark:text-gray-400">
        <li class="w-full focus-within:z-10">
            <a href="#" class="inline-block w-full p-4 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">Profile</a>
        </li>
        <li class="w-full focus-within:z-10">
            <a href="#" class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Dashboard</a>
        </li>
        <li class="w-full focus-within:z-10">
            <a href="#" class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Settings</a>
        </li>
        <li class="w-full focus-within:z-10">
            <a href="#" class="inline-block w-full p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Invoice</a>
        </li>
    </ul>
</div> --}}
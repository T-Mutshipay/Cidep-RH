<!-- Modal -->
<div id="popup-modal" tabindex="-1" class="hidden fixed top-0 left-0 right-0 z-50  items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
    <div class="relative p-4 w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 right-3 text-gray-400 hover:text-gray-900 dark:hover:text-white" data-modal-hide="popup-modal">
            <span class="sr-only">Fermer</span>
        </button>
        <div class="p-4 text-center">
            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
            <h3 id="modal-message" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                Êtes-vous sûr de vouloir supprimer cet élément ?
            </h3>
            <form id="delete-form" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="text-white bg-red-600 hover:bg-red-800 px-5 py-2.5 rounded-lg">
                    Oui, supprimer
                </button>
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ml-3 text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100">
                    Non, annuler
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function supprimer(event) {
        event.preventDefault(); 
    
        let button = event.currentTarget; 
        let message = button.getAttribute("data-message");
        let url = button.getAttribute("data-url"); 
        document.getElementById("modal-message").textContent = message;
        document.getElementById("delete-form").setAttribute("action", url);
    }
    </script>
    
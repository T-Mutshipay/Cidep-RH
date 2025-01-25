<nav class="bg-gradient-to-r from-white via-yellow-400 to-blue-500 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <a href="{{route('index')}}" class="flex items-center">
          <img src="{{asset('img/ECIDEP.jpg')}}" alt="Logo" class="h-10 w-10">
          <span class="text-black text-2xl font-bold ml-2">C.I.D.E.P</span>
        </a>
  
        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6">
          <a href="#" class="text-white hover:text-yellow-200 px-3 py-2 rounded-md text-sm font-medium">Accueil</a>
          <a href="#about" class="text-white hover:text-yellow-200 px-3 py-2 rounded-md text-sm font-medium">À Propos</a>

            <!-- Dropdown menu -->
            <x-dropdown align="right" width="48">
              <x-slot name="trigger">
                  <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 dark:hover:text-black focus:outline-none transition ease-in-out duration-150">
                      <div>{{ Auth::user()->name }}</div>
                      <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                  </button>
              </x-slot>

              <x-slot name="content">
                  <x-dropdown-link :href="route('profile.edit')">
                      {{ __('Profile') }}
                  </x-dropdown-link>
                  <x-dropdown-link :href="route('dashboard')">
                      {{ __('Dashboard') }}
                  </x-dropdown-link>
                  <!-- Déconnexion -->
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                          {{ __('Logout') }}
                      </x-dropdown-link>
                  </form>
              </x-slot>
          </x-dropdown>
        </div>
  
        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
          <button id="mobile-menu-button" class="text-white focus:outline-none">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden transition-all duration-300">
      <a href="#home" class="block text-white hover:bg-yellow-400 px-3 py-2 rounded-md text-base font-medium">Accueil</a>
      <a href="#features" class="block text-white hover:bg-yellow-400 px-3 py-2 rounded-md text-base font-medium">Fonctionnalités</a>
      <a href="#about" class="block text-white hover:bg-yellow-400 px-3 py-2 rounded-md text-base font-medium">À Propos</a>
      <a href="#contact" class="block text-white hover:bg-yellow-400 px-3 py-2 rounded-md text-base font-medium">Contact</a>
    </div>
  </nav>
  
  <script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
  
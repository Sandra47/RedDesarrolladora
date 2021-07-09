<nav x-data="{ open: false }" class="bg-gradient-to-r from-purple-400 via-pink-400 to-pink-500 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
       <div class="flex justify-between h-16">
           <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('Inicio') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                
                @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-5 lg:inline-block ">
                      <a href="{{route('welcome')}}" class="ml-4 block text-lx lg:inline-block text-sm py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-purple-500 mt-4 lg:mt-0 px-4">Home</a>
                      <a href="{{route('nosotros')}}" class="ml-4 block text-lx lg:inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-purple-500 mt-4 lg:mt-0">Nosotros</a>
                          @auth
                            <a href="{{ url('/dashboard') }}" class="ml-4 block text-lx lg:inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-purple-500 mt-4 lg:mt-0">Dashboard</a>
                              @else
                                <a href="{{ route('login') }}" class="ml-4 text-lx inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-purple-500 mt-4 lg:mt-0">Log in</a>
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="ml-4 text-lx inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-purple-500 mt-4 lg:mt-0">Registrar</a>
                              @endif
                          @endauth
                              
                  </div>
               @endif
            </div>
             <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-800 hover:text-gray-400 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-blue-800 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
     <!-- Responsive Navigation Menu -->
    @if (Route::has('login'))

        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden ">
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                    {{ __('Home') }}
                </x-jet-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('nosotros') }}" :active="request()->routeIs('nosotros')">
                    {{ __('Nosotros') }}
                </x-jet-responsive-nav-link>
            </div>
            @auth
                <div class="pt-2 pb-3 space-y-1">
                    <x-jet-responsive-nav-link href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-responsive-nav-link>
                </div>
                @else

                    <div class="pt-2 pb-3 space-y-1">
                        <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-jet-responsive-nav-link>
                    </div>
                @if (Route::has('register'))    
                    <div class="pt-2 pb-3 space-y-1">
                        <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                            {{ __('Registrar') }}
                        </x-jet-responsive-nav-link>
                    </div>
                @endif
            @endauth
        </div>
     @endif
</nav>     
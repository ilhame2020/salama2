<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-18">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('presentatif') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                   
                    @auth('webadmin')
                    <x-nav-link :href="route('admin.home')" :active="request()->routeIs('dashboard')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                    @endauth   
                    @auth('web')
                    <x-nav-link :href="route('user.home',[Auth::user()->id])" :active="request()->routeIs('dashboard')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                    @if(Route::is('user.cours.devoir'))
          
                    @foreach ($devoir as $devoir)
  
                 
                    <x-nav-link href="/user/cours/{{$devoir->cour->id}}" :active="request()->routeIs('dashboard')">
                        {{ __('Cours ') }}
                    </x-nav-link>  
                    @endforeach
                    @endif
                @endauth   
                @auth('webprof')
                    <x-nav-link :href="route('prof.home',[Auth::user()->id])" :active="request()->routeIs('dashboard')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                    @if(Route::is('prof.cours.devoir.*')||Route::is('prof.cours.devoir'))
                    <x-nav-link href="/professeur/cours/{{$id_cours}}" :active="request()->routeIs('dashboard')">
                        {{ __('Cours ') }}
                    </x-nav-link>  
                    <x-nav-link href="/professeur/cours/list/{{$id_cours}}" :active="request()->routeIs('dashboard')">
                        {{ __('Les Listes des étudiants ') }}
                    </x-nav-link>
                    <x-nav-link href="/professeur/cours/archive/{{$id_cours}}" :active="request()->routeIs('dashboard')">
                        {{ __('Archive du cours') }}
                    </x-nav-link>
                    @endif
                    @if(Route::is('prof.cours')||Route::is('prof.cours.list')||Route::is('prof.cours.archive')||Route::is('quiz.*')||Route::is('qcm.*')||Route::is('qr.*'))
                    <x-nav-link href="/professeur/cours/{{$id}}" :active="request()->routeIs('dashboard')">
                        {{ __('Cours ') }}
                    </x-nav-link>  
                    <x-nav-link href="/professeur/cours/list/{{$id}}" :active="request()->routeIs('dashboard')">
                        {{ __('Les Listes des étudiants ') }}
                    </x-nav-link>
                    <x-nav-link href="/professeur/cours/archive/{{$id}}" :active="request()->routeIs('dashboard')">
                        {{ __('Archive du cours') }}
                    </x-nav-link>
                    @endif
                @endauth     
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            @auth('webadmin')
                            <div>{{__(' admin') }}</div>
                            @endauth 
                            @auth('web')
                            <div>{{ Auth::user()->nom_etudiant }} {{Auth::user()->prenom_etudiant }}</div>
                            @endauth 
                            @auth('webprof')
                            <div>{{ Auth::user()->name_p }}</div>
                            @endauth  
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    

                    <x-slot name="content">
                        <!-- Authentication -->
                        @auth('webadmin')
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('admin.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                     {{ __('Se deconnecter') }}
                               

                               </x-dropdown-link>
                           </form>
                                    
                        @endauth                        
                        @auth('web')  
                         <form method="POST" action="{{ route('user.logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('user.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">      
                                     {{ __('Se deconnecter') }}
                               

                               </x-dropdown-link>
                           </form>
                        
                        @endauth  
                        @auth('webprof') 
                          <form method="POST" action="{{ route('prof.logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('prof.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">   
                                                         {{ __('Se deconnecter') }}
                               

                               </x-dropdown-link>
                           </form>
                        
                                                @endauth     
                       
                      

                    
                            
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


        @auth('webadmin')
            <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.home')" :active="request()->routeIs('dashboard')">
                {{ __('Accueil') }}
            </x-responsive-nav-link><!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{__(' admin') }}</div>
                <div class="font-medium text-sm text-gray-500">{{ __('admin@gmail.com') }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('user.logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('user.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
        @endauth   
        @auth('web')
            <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="url('/user/{idE}', [Auth::user()->id])" :active="request()->routeIs('dashboard')">
                {{ __('Accueil') }}
            </x-responsive-nav-link><!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->nom_etudiant }} {{Auth::user()->prenom_etudiant }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('user.logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('user.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
        @endauth   
        @auth('webprof')
            <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            
            <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name_p }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                
            </div>
                    <x-responsive-nav-link :href="route('prof.home',[Auth::user()->id])" :active="request()->routeIs('dashboard')">
                        {{ __('Accueil') }}
                     </x-responsive-nav-link>
                    <x-responsive-nav-link :href="url('/professeur#Trav-D')">
                        {{ __('Gestion des td ') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="url('/professeur#Trav-p')">
                        {{ __('Gestion des Tps ') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="url('/professeur#Trav-D')">
                        {{ __('Listes des étudiants ') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="url('/professeur#Trav-D')">
                        {{ __('Gestion des Quizs ') }}
                    </x-responsive-nav-link>
            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('user.logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('user.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
        @endauth      
        </div>

        
</nav>
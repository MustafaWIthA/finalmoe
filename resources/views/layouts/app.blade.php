<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ministry') }}</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" ></script>
    <script src="{{ asset('js/chart.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    {{--  --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>
      .invoice_body_billing_details{
    margin-top: 20px;
}
.invoice_details {
    background-color: #e2e2e2;
    margin-bottom: 30px;
    padding: 20px;
}
@media print{
    .invoice_print, #lef, .head, #top,.btn-success {
        display:none;
    }
}
@media (max-width: 540px){
    .button-alignment{
        margin-top: 20px;
    }
}
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
    </style>

    @livewireStyles
</head>
<body>

    <div class="h-screen flex overflow-hidden bg-gray-100">
        <!-- Off-canvas menu for mobile -->
        <div class="md:hidden" x-data="{ isactive: false } ">
          <div class="fixed inset-0 flex z-40" x-show="isactive"
           
                    Entering: "transition-opacity ease-linear duration-300"
                      From: "opacity-0"
                      To: "opacity-100"
                    Leaving: "transition-opacity ease-linear duration-300"
                      From: "opacity-100"
                      To: "opacity-0"
                    >
            <div class="fixed inset-0">
              <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
            </div>
            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.
      
              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-indigo-800 ">
              <div class="absolute top-0 right-0 -mr-14 p-1" >
                <button class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600" aria-label="Close sidebar">
                  <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <div class="flex-shrink-0 flex items-center px-4">
                <a href="/home">
                <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Puntland_State_of_Somalia_Coat_of_Arms.png/640px-Puntland_State_of_Somalia_Coat_of_Arms.png?download" alt="Workflow">
                </a>
              </div>
              <div class="mt-5 flex-1 h-0 overflow-y-auto">
                <nav class="px-2 space-y-1">
                <a href="/" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-indigo-900 focus:outline-none focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-4 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                  </a>
                  @hasrole('SuperAdmin')                  
                  
                  <a href="#" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-4 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    User management 
                  </a>
                  @endhasrole
                <a href="{{route('projects.index')}}" class="group 
                flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md 
                text-indigo-300 hover:text-white hover:bg-indigo-700 
                focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-4 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                    Projects
                  </a>
      
                  <a href="#" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-4 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Map
                  </a>
      
                  <a href="#" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-4 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    Documents
                  </a>
      
                  <a href="" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-indigo-300 hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-4 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Reports
                  </a>
                </nav>
              </div>
            </div>
            <div class="flex-shrink-0 w-14">
              <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
          </div>
        </div>
      
        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0 ">
          <div class="flex flex-col w-64">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow bg-green-700 pt-5 pb-4 overflow-y-auto">
              <div class="flex items-center flex-shrink-0 px-4">
                <a href="/" >                
                  <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Puntland_State_of_Somalia_Coat_of_Arms.png/640px-Puntland_State_of_Somalia_Coat_of_Arms.png?download" alt="Workflow">
                </a>                  <span class="text-white font-extrabold">Puntalnd ESPS</span>

            </div>
              <div class="mt-5 flex-1 flex flex-col">
                <nav class="flex-1 px-2 bg-green-800 space-y-1">
                  <a href="/" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-white rounded-md bg-indigo-900 focus:outline-none focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-3 h-6 w-6 text-indigo-400 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                  </a>
      
                  <a href="{{route('projects.index')}}" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-indigo-300 rounded-md hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-3 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                    Projects
                  </a>
            
                  
      
                <a href="{{route('reports')}}" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-indigo-300 rounded-md hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-3 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Reports
                  </a>
                  {{-- <a href="#" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-indigo-300 rounded-md hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-3 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    Map
                  </a> --}}
                  @hasrole('SuperAdmin')                  

                  <a href="{{route('users.index')}}" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-indigo-300 rounded-md hover:text-white hover:bg-indigo-700 focus:outline-none focus:text-white focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-3 h-6 w-6 text-indigo-400 group-hover:text-indigo-300 group-focus:text-indigo-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    User management 
                  </a>
                  @endhasrole
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
          <div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
            <button class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden" aria-label="Open sidebar">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
              </svg>
            </button>
            <div class="flex-1 px-4 flex justify-between">
              <div class="flex-1 flex">
                <div class="w-full flex md:ml-0">
                  <label for="search_field" class="sr-only">Search</label>
                  <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                      </svg>
                    </div>
                    <input wire:model="search" class="block w-full h-full pl-8 pr-3 py-2 rounded-md text-gray-900 
                    placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 sm:text-sm"  
                    type="text"  >

                  </div>
                </div>
              </div>
              <div class="ml-4 flex items-center md:ml-6">
                <button class="p-1 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:shadow-outline focus:text-gray-500" aria-label="Notifications">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                  </svg>
                </button>
      
                <!-- Profile dropdown -->
                <div x-data="{ isOpen: false }" @keydown.escape="open = false" @click.away="open = false"  class="ml-3 relative">
                  <div>
                      <button  @click="isOpen = !isOpen" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out" id="user-menu" aria-label="User menu" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->avatarUrl() }}" alt="">
                      </button>
                  </div>
                  
               
                  <div x-show="isOpen"
                          x-transition:enter="transition ease-out duration-100 transform"
                          x-transition:enter-start="opacity-0 scale-95"
                          x-transition:enter-end="opacity-100 scale-100"
                          x-transition:leave="transition ease-in duration-75 transform"
                          x-transition:leave-start="opacity-100 scale-100"
                          x-transition:leave-end="opacity-0 scale-95"
                          class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                    <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" 
                      role="menuitem">{{ Auth::user()->email }}</a>
      
                      <a href="{{route('profile', Auth::user()->id)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Profile</a>
      
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                          <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem"
                          href="{{ route('logout') }}"  onclick="event.preventDefault(); this.closest('form').submit();"
                          >
                            {{ __(' Sign out') }}
                        </a>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <main x-show="open" class="flex-1 relative overflow-y-auto focus:outline-none" tabindex="0">
            <div class="pt-2 pb-6 md:py-6">
              {{-- Dashboard --}}
              <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-semibold text-gray-900"> 
                @yield('maintitle')  
                </h1>
                
              </div>
              <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <!-- main your content -->
                <div class="py-4">
                  @yield('content') 
                  <div class="col-span-6">
                    {{-- @include('partials.donors') --}}
                    
                                           
                </div>
                <!-- /End main -->
              </div>
            </div>
          </main>
        </div>
      </div>      
      @livewireScripts
      
</body>
</html>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  $("#agencies").select2({
          placeholder: "Select Agencies",
          allowClear: true
      });
  $("#donors").select2({
      placeholder: "Select Donors",
      allowClear: true
  });
  $("#districts").select2({
      placeholder: "Select a districts",
      allowClear: true
  });
</script>


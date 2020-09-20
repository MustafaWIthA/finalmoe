<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Education Projects Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-600 bg-opacity-75">
  <div class="min-h-screen bg-white flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <img class="h-12 w-auto ml-auto mr-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Puntland_State_of_Somalia_Coat_of_Arms.png/640px-Puntland_State_of_Somalia_Coat_of_Arms.png?download" alt="Workflow">
          <h2 class="mt-6 text-3xl leading-9 font-extrabold text-gray-900">
            ministry of eduction ..<br>
            Sign in to your account
          </h2>
          {{-- <p class="mt-2 text-sm leading-5 text-gray-600 max-w">
            Or
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
              start your 14-day free trial
            </a>
          </p> --}}
        </div>
  
        <div class="mt-8">
         
  
          <div class="mt-6">
            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                @error('email')
                <span class="text-red-500 text-xs italic center">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              <div>
                <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                  Email address
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                  <input name="email" id="email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
              </div>
  
              <div>
                <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                  Password
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                  <input name="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
              </div>
  
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                  <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                    Remember me
                  </label>
                </div>
  
                <div class="text-sm leading-5">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    Forgot your password?
                  </a>
                </div>
              </div>
  
              <div>
                <span class="block w-full rounded-md shadow-sm">
                  <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Sign in
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img class="absolute inset-0 h-full w-full object-cover" src="img/students.jpg" alt="">
    </div>
</body>
</html>

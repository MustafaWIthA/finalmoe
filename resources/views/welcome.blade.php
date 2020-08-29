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
<div class="w-full  max-w-xs mt-20  mr-auto ml-auto">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 " method="POST" action="{{ route('login') }}">
      @csrf

      @error('email')
      <span class="text-red-500 text-xs italic center">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="shadow appearance-none border rounded 
      
          w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="email" name="email" type="email" 
            required  placeholder="email">
           
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 
            text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
            id="password" name="password" type="password" 
            required placeholder="password">

            @error('password')
            <span class="text-red-500 text-xs italic"">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 
          rounded focus:outline-none focus:shadow-outline"  type="submit">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-white hover:text-blue-800" href="#">
        Forgot password?
      </a>
    </div>
  </form>
  {{-- <p class="text-center text-gray-500 text-xs">
    &copy;2020 Ilsoftware. All rights reserved.
  </p> --}}
</div>
</body>
</html>

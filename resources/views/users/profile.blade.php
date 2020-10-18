@extends('layouts.app')
@section('maintitle')
Profile
@endsection
@section('content')
@include('partials.error')
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="flex items-center content-center">
    <div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        @error('Current_Password')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror

        <form method="POST" action="{{ route('changepassword') }}" class="w-full max-w-lg">
                @csrf
                
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Current Password
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="password" name="Current_Password" placeholder="******************">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        New Password
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500""
                        type="password" name="new_password" >
                     @error('new_password')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Confirm Password 
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="password" name="password_confirmation">
                </div>
            </div>
            <button type="submit"
            class="inline-flex items-center px-4 py-2 
                bg-blue-800 border border-transparent rounded-md font-semibold text-xs 
                text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
                focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
            Register
        </button>
        </form>
    </div>
</div>


@endsection
@extends('layouts.app')
@section('maintitle')
Create New User
@endsection
@section('content')
<div class="flex items-center content-center">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div>
                <label class="block font-medium text-sm text-gray-700">
                    First Name
                </label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" value="{{old('first_name')}}"
                    type="text" name="first_name" required="required" autofocus="autofocus" autocomplete="first_name">
                @error('first_name')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror

            </div>
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700">
                    Second Name
                </label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" value="{{old('second_name')}}"
                    type="text" name="second_name" required="required">
                @error('second_name')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror

            </div>
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700">
                    Last Name
                </label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" value="{{old('last_name')}}"
                    type="text" name="last_name" required="required">
                @error('last_name')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror
            </div>
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700">
                    Username
                </label>
                <input class="form-input rounded-md shadow-sm block mt-1 w-full" value="{{old('username')}}" type="text"
                    name="username" required="required" autocomplete="new-password">
            </div>
            @error('username')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror

    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ml-3.5">
        <div>
            <label class="block font-medium text-sm text-gray-700">
                Email
            </label>
            <input class="form-input rounded-md shadow-sm block mt-1 w-full" value="{{old('email')}}" type="email"
                name="email" required="required">
            @error('email')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror

        </div>
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">
                Date of Birthdate
            </label>
            <input class="form-input rounded-md shadow-sm block mt-1 w-full" value="{{old('birthdate')}}" type="date"
                name="birthdate" required="required">
            @error('birthdate')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror

        </div>
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">
                Password
            </label>
            <input class="form-input rounded-md shadow-sm block mt-1 w-full" type="password" name="password"
                required="required" autocomplete="new-password">
            @error('password')<span class="mt-2 text-sm text-red-600">{{ $message }}</span>@enderror

        </div>
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">
                Confirm Password
            </label>
            <input class="form-input rounded-md shadow-sm block mt-1 w-full" type="password"
                name="password_confirmation" required="required" autocomplete="new-password">
        </div>
    </div>
</div>
<div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div>
            @foreach ($Roles as $Role)
            <div class="mt-4">
                <div class="flex items-center">
                    <input type="checkbox" name="roles[]" value="{{$Role->id}}"
                        class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
                    <span class="block text-sm leading-5 font-medium text-gray-700 px-2">{{$Role->name}}</span>
                    </label>
                </div>
            </div>
            @endforeach
        </div>
        @error('roles')<span class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</span>@enderror

    </div>

    <div class="flex items-center justify-end mt-4">
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
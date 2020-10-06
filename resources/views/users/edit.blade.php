@extends('layouts.app')
@section('maintitle')
Edit User Info
@endsection
@section('content')
@include('partials.error')

@error('first_name')
 <strong>{{ $message }}</strong>
@enderror
@error('second_name')
 <strong>{{ $message }}</strong>
@enderror
@error('third_name')
 <strong>{{ $message }}</strong>
@enderror
@error('username')
 <strong>{{ $message }}</strong>
@enderror
@error('email')
 <strong>{{ $message }}</strong>
@enderror
@error('password')
 <strong>{{ $message }}</strong>
@enderror
<div class="flex items-center content-center">
        <div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('users.update',$user->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <label class="block font-medium text-sm text-gray-700">
                    First Name
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" 
                    type="text"
                    value="{{$user->first_name}}" name="first_name" required="required" autofocus="autofocus" autocomplete="first_name">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700">
                    Second Name
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text"
                    value="{{$user->second_name}}" name="second_name" required="required">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700">
                    Third Name
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" 
                    type="text"
                    value="{{$user->last_name}}" name="last_name" required="required" >
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700">
                    Username
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" 
                        type="text"
                        value="{{$user->username}}" name="username" required="required" autocomplete="new-password">
                </div>
                </div>
                <div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ml-3.5">
                <div>
                    <label class="block font-medium text-sm text-gray-700">
                    Email
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" 
                        type="email"
                        value="{{$user->email}}" name="email" required="required">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700">
                    Date of Birthdate
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="date"
                        value="{{$user->birthdate}}" name="birthdate" required="required">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700">
                    Password
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="password"
                         name="password" required="required" autocomplete="new-password">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700">
                    Confirm Password
                    </label>
                    <input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="password"
                         name="password_confirmation" required="required" autocomplete="new-password">
                </div>
                
                </div>
                   
                    
                </div>
                @can('update users')  
                <div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ml-3.5">
                    <div> Roles:@foreach ($user->Roles as $Role) 
                        <span class=" font-extrabold">{{$Role->name}}</span>
                         @endforeach
                            @foreach ($Roles as $Role)
                            <div class="mt-4">
                                <div class="flex items-center">
                                    <input  type="checkbox"  name="roles[]" value="{{$Role->id}}"
                                    class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
                                    <span class="block text-sm leading-5 font-medium text-gray-700">{{$Role->name}}</span>
                                    </label>
                                </div> 
                            </div>
                            @endforeach
                        </div>
                        @error('roles')<span class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</span>@enderror
                </div>
                @endcan
                
                <div>
                 <div class="mt-6 px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg ml-3.5 content-center">
                        <button type="submit" class="sm:w-full text-center inline-flex items-center px-4 py-4 
                    bg-blue-800 border border-transparent rounded-md font-semibold text-xs 
                    text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
                    focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                    Update
                    </button>
            </form>
</div>
</div>


@endsection
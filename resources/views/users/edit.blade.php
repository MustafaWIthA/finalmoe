@extends('layouts.app')
@section('maintitle')
Create New User
@endsection
@section('content')

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
<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
<form method="POST" action="{{ route('users.update') }}">
@csrf
<div>
<label class="block font-medium text-sm text-gray-700">
First Name
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="first_name" required="required" autofocus="autofocus" autocomplete="first_name">
</div>
<div class="mt-4">
<label class="block font-medium text-sm text-gray-700">
Second Name
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="second_name" required="required">
</div>
<div class="mt-4">
<label class="block font-medium text-sm text-gray-700">
Third Name
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" 
type="text" name="last_name" required="required" >
</div>
<div class="mt-4">
<label class="block font-medium text-sm text-gray-700">
Username
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" 
    type="text" name="username" required="required" autocomplete="new-password">
</div>
</div>
<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ml-3.5">
<div>
<label class="block font-medium text-sm text-gray-700">
Email
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" 
    type="email" name="email" required="required">
</div>
<div class="mt-4">
<label class="block font-medium text-sm text-gray-700">
Date of Birthdate
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="date" name="birthdate" required="required">
</div>
<div class="mt-4">
<label class="block font-medium text-sm text-gray-700">
Password
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="password" name="password" required="required" autocomplete="new-password">
</div>
<div class="mt-4">
<label class="block font-medium text-sm text-gray-700">
Confirm Password
</label>
<input  class="form-input rounded-md shadow-sm block mt-1 w-full" type="password" name="password_confirmation" required="required" autocomplete="new-password">
</div>
</div>
</div>
<div>
<div class="flex items-center justify-end mt-4">
    
<button type="submit" class="inline-flex items-center px-4 py-2 
bg-blue-800 border border-transparent rounded-md font-semibold text-xs 
text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
Register
</button>
</form>
</div>
</div>

@endsection
@extends('layouts.app')

@section('content')
  <div>
  @livewire('status')
  </div>
  <div class="mt-4">
    @hasrole('SuperAdmin')
    @livewire('projects')
    @else
        you are not an admin
    @endhasrole


  </div>
  
@endsection

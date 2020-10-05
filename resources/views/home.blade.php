@extends('layouts.app')

@section('content')
  <div>
  @livewire('numbers')
  <div class="mt-4">
  
    <h3>
        <h3>All Registred Projects</h3>
    </h3>

  </div>
  
  @livewire('status')
  </div>
 
  
  
@endsection

@extends('layouts.app')

@section('content')
  <div>
  @livewire('status')
  </div>
  <div class="mt-4">
    @livewire('projects')
  </div>
  
@endsection

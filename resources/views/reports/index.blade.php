@extends('layouts.app')
@section('maintitle')
    Search Project
@endsection

@section('content')
<div class="pb-5 border-b border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
    
  </div>
  <br>
  @livewire('reports') 
  <div>
    @livewire('projects')
  </div>  
@endsection






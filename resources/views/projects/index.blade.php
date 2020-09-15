@extends('layouts.app')
@section('maintitle')
    Projects Data
@endsection
@section('content')
<div class="relative w-full text-gray-400 focus-within:text-gray-600">
    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
      </svg>
    </div>
    
    <input class="block w-full h-full pl-8 pr-3 py-2 p-3 rounded-md text-gray-900 
    placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 sm:text-sm"  
    type="text" wire:model.live="search" >
  
  </div><br>
  <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              
@livewire('projects')

</tbody>
</table>
</div>
</div>
</div>
</div>

@endsection
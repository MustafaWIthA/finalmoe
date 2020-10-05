@extends('layouts.app')
@section('maintitle')
Projects Data
@endsection
@section('content')

<div class="pb-5 border-b border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      {{-- //partials --}}
      @include('partials.error')
    </h3>
    <div>
      @hasrole('SuperAdmin|Editor')
      <span class="shadow-sm rounded-md">
        <a href="projects/create">
          <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out">
            Create new Project
          </button>
        </a>
    </span>
      @endhasrole
      
    </div>
  </div>
  <br>
<div class="flex flex-col">
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
<div>
  @livewire('projects')

</div>


</div>
</div>
</div>
</div>

@endsection
@extends('layouts.app')
@section('maintitle')

Edit Project: @include('partials.error')
@endsection
@section('content')
<div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Project Information</h3>
          <p class="mt-1 text-sm leading-5 text-gray-600">
            Carefully fill each field
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ route('projects.update', [$project->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            @error('title')
            <div class="rounded-md bg-red-50 p-4">
              <div class="flex">
                <div class="flex-shrink-0">
                  <!-- Heroicon name: x-circle -->
                  <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="ml-3">
                  <h3 class="text-sm leading-5 font-medium text-red-800">
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  </h3>
                </div>
              </div>
            </div>
            @enderror
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6">
                  <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">Ttile of the Project</label>
                <input type="text" id="title" name="title" value="{{$project->title}}"
                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                
                </div>
  
                <div class="col-span-6">
                    <label for="Description" class="block text-sm font-medium leading-5 text-gray-700">Project Description</label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <textarea name="description" id="about" value="{{$project->description}}"
                                  rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{$project->description}}</textarea>
                      </div>
                </div>
                  <div class="col-span-3">
                    <label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Donor(s)</label>
                    <select multiple="multiple" id="donors" name="donors[]" class="donors w-full form-control form-select">
                        @foreach ($project->Donors as $Donor)
                          <option value="{{$Donor->id}}" selected="selected">{{$Donor->name}}</option> 
                        @endforeach  
                        @foreach ($Donors as $Donor)
                      <option value="{{$Donor->id}}">{{$Donor->name}}</option>
                      @endforeach  
                    </select>
                  </div>
                  <div class="col-span-3">
                    <label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Agency(s)</label>
                    <select multiple="multiple" name="agencies[]" id="agencies" class="agencies w-full form-control form-select">
                      @foreach ($project->Agencies as $Agency)
                      <option value="{{$Agency->id}}" selected="selected" disabled="disabled">{{$Agency->name}}</option> 
                      @endforeach  
                        
                      @foreach ($Agencies as $Agency)
                      <option value="{{$Agency->id}}">{{$Agency->name}}</option>
                      @endforeach  
                    </select>
                  </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Type</label>
                  <select name="type_id" class="w-full form-control form-select">
                      <option value="{{$project->type_id}}" selected="selected" >{{$project->type->name}}</option> 
                      @foreach ($Types as $Type)
                    <option value="{{$Type->id}}">{{$Type->name}}</option>
                    @endforeach  
                  </select>
                </div>
              
                <div class="col-span-6 sm:col-span-3">
                  <label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project State</label>
                    <select name="state_id" class="w-full form-control form-select">
                        <option value="{{$project->state_id}}" selected="selected" >{{$project->state->name}}</option> 
                      <hr>
                        @foreach ($Status as $State)
                      <option value="{{$State->id}}">{{$State->name}}</option>
                      @endforeach  
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                    <label for="Budget" class="block text-sm font-medium leading-5 text-gray-700">Budget</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm sm:leading-5">
                          $
                        </span>
                      </div>
                    <input type="number" name="budget" id="Budget" value="{{$project->budget}}" class="pl-7 mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                  </div>
                </div>
                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                  <label for="target" class="block text-sm font-medium leading-5 text-gray-700">target</label>
                  <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <span class="text-gray-500 sm:text-sm sm:leading-5">
                        
                      </span>
                    </div>
                  <input type="number" name="target" id="target" value="{{$project->target}}" class="pl-7 mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
              </div>
                  
  
                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                  <label for="Start Date" class="block text-sm font-medium leading-5 text-gray-700">Start Date</label>
                  <input type="date" value="{{$project->start_date}}" name="start_date" id="start_date" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                    <label for="end_date" class="block text-sm font-medium leading-5 text-gray-700">End Date</label>
                    <input type="date" name="end_date" value="{{$project->end_date}}" id="end_date" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="hidden sm:block">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Sector and Priority Section</h3>
          <p class="mt-1 text-sm leading-5 text-gray-600">
            Choose the right Sector and Priority by clicking one or more sectors
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <fieldset>
                <legend class="text-base leading-6 font-medium text-gray-900">Choose Education Sub Sectors</legend>
                <div>
                  @foreach ($Sectors as $sector)
                  <div class="mt-4">
                  <div class="flex items-start">                    
                      <div class="flex items-center h-5">

                        <input  type="checkbox" name="sectors[]" value="{{$sector->id}}"    
                              
                        class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
                      </div>
                      <div class="ml-3 text-sm leading-5">
                        <label for="comments" class="font-medium text-gray-700">{{$sector->name}}</label>
                        {{-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> --}}
                      </div>
                    </div>
                  </div>   
                  @endforeach
              </div>
              </fieldset>
              <fieldset class="mt-6">
                <legend class="text-base leading-6 font-medium text-gray-900">Choose Education Sector Priorities</legend>
                <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p>
                  @livewire('priorities') 
              </fieldset>
              {{-- <fieldset class="mt-6">
                <legend class="text-base leading-6 font-medium text-gray-900">Choose Cross Cutting Thematic Areas</legend>
                <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p>
                <div class="mt-4 flex items-center">
                  <input id="offers" type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
                  <label for="push_nothing" class="ml-3">
                    <span class="block text-sm leading-5 font-medium text-gray-700">Education in Emergency (EiE)</span>
                  </label>
                </div>
                <div class="mt-4 flex items-center">
                  <input id="offers" type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
                  <label for="push_nothing" class="ml-3">
                    <span class="block text-sm leading-5 font-medium text-gray-700">Child Protection</span>
                  </label>
                </div>
                
              </fieldset> --}}
            </div>
            
         
          </div>
        
      </div>
      
    </div>
  </div>
  <div class="hidden sm:block">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Region and Districts Section</h3>
          <p class="mt-1 text-sm leading-5 text-gray-600">
            Choose the right Region and District by clicking one or more sectors
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <fieldset>
                <legend class="text-base leading-6 font-medium text-gray-900">Choose Region </legend>
                <div class="mt-4">
                  <div x-data="{ region: false }">
                    @foreach ($Regions as $Region)
                    <div class="mt-4">
                    <div class="flex items-center">
                        <input @click="region = true"  type="checkbox" name="regions[]" value="{{$Region->id}}"
                        class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
                        <label for="push_everything" class="ml-3">
                        <span class="block text-sm leading-5 font-extrabold text-green-700">{{$Region->name}}</span>
                        </label>                        
                      </div> 
                    </div>
                    @endforeach
                </div>
                </div>
              </fieldset>
              <fieldset class="mt-6">
                <legend class="text-base leading-6 font-medium text-gray-900">Choose Districts/ Areas</legend>
                <div class="mt-4 flex items-center">

                <label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Districts</label>
                <select multiple="multiple" id="districts" name="districts[]" class="districts w-full form-control form-select">
                  @foreach ($project->Districts as $District)
                  <option value="{{$District->id}}" selected="selected" disabled="disabled">{{$District->name}}</option> 
                  @endforeach 
                  @foreach ($Districts as $district)
                  <option value="{{$district->id}}">{{$district->name}}</option>
                  @endforeach  
                </select>
                </div>
               
                
              </fieldset>

              {{-- <fieldset class="mt-6">
                <legend class="text-base leading-6 font-medium text-gray-900">Choose Districts/ Areas</legend>
                <div class="mt-4 flex items-center">
                        <input type="file" name="documents[]" id="">
                    </label>
                </div>
                </div>
                
                
              </fieldset> --}}
              
            </div>
            
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md 
                text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none 
                focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition 
                duration-150 ease-in-out">
                Save
              </button>
            </div>
          </div>
        </form>
        
      </div>
      
    </div>
  </div>
</div>
  
@endsection
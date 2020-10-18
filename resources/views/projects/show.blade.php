@extends('layouts.app')
@section('maintitle')

<div class="lg:flex lg:items-center lg:justify-between bg-blue-700 py-13 px-13 rounded-md rounded-b-none">
  <div class="flex-1 min-w-0">
    <span class="text-gray-200">Project Title</span>

    <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:leading-9 sm:truncate">
      {{Str::upper($project->title)}}
    </h2>
    <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
      <div class="mt-2 flex items-center text-sm leading-5 text-gray-300 sm:mr-6">
        <svg class="flex-shrink-0 mr-1.5 h-10 w-7 text-gray-500" fill="white" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
            clip-rule="evenodd" />
          <path
            d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
        </svg>
        <span class="text-gray-200">Project Title</span>
        {{$project->Type->name}}
      </div>
      <div class="mt-2 flex items-center text-sm leading-5 text-gray-300 sm:mr-6">
        <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
          </path>
        </svg>
        <span class="px-2">Target beneficiaries: </span> {{$project->target}}
      </div>
      <div class="mt-2 flex items-center text-sm leading-5 text-gray-300 sm:mr-6">
        <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
          </path>
        </svg>
        <span class="px-2">Implementing Agency </span>
        @foreach ($project->agencies as $agency)
        {{$agency->name}}
        @endforeach
      </div>
      <div class="mt-2 flex items-center text-sm leading-5 text-gray-300 sm:mr-6">
        <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
          </path>
        </svg>
        <span class="px-2">Donor(s) </span>
        @foreach ($project->donors as $donor)
        {{$donor->name}}
        @endforeach
      </div>
      <div class="mt-2 flex items-center text-sm leading-5 text-gray-300 sm:mr-6">
        <svg class="flex-shrink-0 mr-1.5 h-10 w-7 text-gray-500" fill="white" viewBox="0 0 20 20">
          <path
            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
            clip-rule="evenodd" />
        </svg>
        <span class="px-2">Project Budget</span>
        ${{number_format($project->budget)}}

      </div>
      <div class="mt-2 flex items-center text-sm leading-5 text-gray-300">
        <svg class="flex-shrink-0 mr-1.5 h-10 w-7 text-gray-500" fill="white" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
            clip-rule="evenodd" />
        </svg>
        Start Date: {{$project->start_date->format('D,M, Y')}}
      </div>
      <div class="mt-2 flex items-center text-sm leading-5 text-gray-300">
        <svg class="flex-shrink-0 mr-1.5 h-10 w-7 text-gray-500" fill="white" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
            clip-rule="evenodd" />
        </svg>
        End Date: {{$project->end_date->format('D,M, Y')}}
      </div>
    </div>
  </div>

</div>

@endsection
@section('content')
<div x-data="{ currentTab: 'first' }">
  <div class="sm:hidden">
    <select aria-label="Selected tab" class="form-select block w-full">
      <option>My Account</option>
      <option>Company</option>
      <option selected>Team Members</option>
      <option>Billing</option>
    </select>
  </div>
  <div class="hidden sm:block">
    <div class="border-b border-green-700 bg-green-700">
      <nav class="-mb-px flex">
        <button @click="currentTab = 'first'" :class="{ 'active' : currentTab === 'first'}"
          class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Project Summary
        </button>
        <button @click="currentTab = 'fourth'"
          class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Project Activities
        </button>
        <button @click="currentTab = 'second'"
          class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Project Documents
        </button>

        {{-- <button @click="currentTab = 'third'" class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
Project Regions
</button> --}}
      </nav>
    </div>
  </div>
  <div x-show="currentTab === 'first'" class="bg-white shadow sm:rounded-lg">
    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
      <dt class="text-sm leading-5 font-medium text-gray-900">
        Project Description
      </dt>
      <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
        {{$project->description}}
      </dd>
      
      
      <dt class="text-sm leading-5 font-medium text-gray-900">
        Project Priority
      </dt>
      <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
        @forelse ($project->Priorities as $Priority)
        
          <ul class="list-disc">
          <li>{{$Priority->name}},</li>
        </ul>
        @empty
        <h1>nothin is added yet</h1>
        @endforelse
      </dd>
      <dt class="text-sm leading-5 font-medium text-gray-900">
        Project Sector
      </dt>
      <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
       
        @forelse ($project->Sectors as $Sector)
        <ul class="list-disc">
          <li> {{$Sector->name}},</li>
        </ul>
        @empty
        <h1>nothin is added yet</h1>
        @endforelse
      </dd>
      <dt class="text-sm leading-5 font-medium text-gray-900">
        Project Regions
      </dt>

      <dt class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
        @forelse ($project->regions as $region)
        <ul class="list-disc">
          <li> {{$region->name}},</li>
        </ul>
        @empty
        <h1>nothin is added yet</h1>
        @endforelse
      </dt>
      <dt class="text-sm leading-5 font-medium text-gray-900">
        Project Districts
      </dt>

      <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
        @forelse ($project->districts as $district)
        {{$district->name}},
        <ul class="list-disc">
          <li> {{$district->name}},</li>
        </ul>
        @empty
        <h1>nothin is added yet</h1>
        @endforelse
      </dd>
    </div>
  </div>

  <div x-show="currentTab === 'second'" class="bg-white shadow sm:rounded-lg">
    <div x-data="{ isDoc: false }">
      <span class="shadow-sm rounded-md float-right">
        <button type="button" @click="isDoc = !isDoc"
          class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out">
          Upload new Document
        </button>
      </span>

      <div class="fixed inset-0 overflow-hidden mt-12" x-show="isDoc">
        <div class="fixed inset-0 overflow-hidden">

          <div>
            <div class="absolute inset-0 overflow-hidden">
              <section class="absolute inset-y-0 right-0 pl-10  max-w-md flex sm:pl-16 mt-20">
                <!--
Slide-over panel, show/hide based on slide-over state.

Entering: "transform transition ease-in-out duration-500 sm:duration-700"
From: "translate-x-full"
To: "translate-x-0"
Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
From: "translate-x-0"
To: "translate-x-full"
-->
                <div class="w-screen max-w-md ">
                  <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                    <div class="flex-1">
                      <!-- Header -->
                      <header class="px-4 py-6 bg-gray-50 sm:px-6">
                        <div class="flex items-start justify-between space-x-3">
                          <div class="space-y-1">
                            <h2 class="text-lg leading-7 font-medium text-gray-900">
                              Upload Document
                            </h2>

                            <p class="text-sm text-gray-500 leading-5">
                              <div x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                              </div>
                              <div wire:loading wire:target="document">Uploading...</div>
                              @error('document') <span class="error">{{ $message }}</span> @enderror
                            </p>
                          </div>
                          <div class="h-7 flex items-center">
                            <button aria-label="Close panel"
                              class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
                              <!-- Heroicon name: x -->
                              <svg @click="isDoc = !isDoc" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </button>
                          </div>
                        </div>
                      </header>

                      <div class="py-6 space-y-6 sm:py-0 sm:space-y-0 sm:divide-y sm:divide-gray-200">
                        <!-- Project name -->
                        <div class="space-y-1 px-4 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
                          <div>
                            <label for="project_name"
                              class="block text-sm font-medium leading-5 text-gray-900 sm:mt-px sm:pt-2">
                              Project name
                            </label>
                          </div>
                          <div class="sm:col-span-2">
                            <div class="rounded-md shadow-sm">
                              @error('document')
                              <strong>{{ $message }}</strong>
                              @enderror
                              <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="number" name="project_id" value="{{$project->id}}">
                                <input type="file" name="document">
                                {{-- <button type="submit">Save Docuemnt</button> --}}

                            </div>
                          </div>
                        </div>
                        <div class="flex-shrink-0 px-4 border-t border-gray-200 py-5 sm:px-6">
                          <div class="space-x-3 flex justify-end">
                            <span class="inline-flex rounded-md shadow-sm">
                              <button @click="isDoc = !isDoc" type="button"
                                class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Cancel
                              </button>
                            </span>
                            <span class="inline-flex rounded-md shadow-sm">
                              <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Create
                              </button>
                              </form>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
              </section>
            </div>
          </div>

          {{-- <livewire:upload-document :project="$project"> --}}

        </div>
      </div>

    </div>

    <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
      <dt class="text-sm leading-5 font-medium text-gray-900">
        Attachments
      </dt>
      <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
        <ul class="border border-gray-200 rounded-md">
          @foreach ($project->documents as $document)
          <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
            <div class="w-0 flex-1 flex items-center">
              <svg class="flex-shrink-0 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                  clip-rule="evenodd" />
              </svg>
              <span class="ml-2 flex-1 w-0 truncate">
                {{$document->type}}
              </span>
            </div>
            <div class="ml-4 flex-shrink-0">
              {{number_format($document->size/1048576,2)}} MB
            </div>
            <div class="ml-4 flex-shrink-0">
              <a href="/{{$document->name}}" target="_new"
                class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                Download
              </a>
            </div>

          </li>
          @endforeach

        </ul>
      </dd>
    </div>
  </div>


  <div x-show="currentTab === 'third'" class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
      <div>
        @forelse ($project->regions as $region)
        {{$region->name}}
        @empty
        <h1>nothin is added yet</h1>
        @endforelse

      </div>
    </div>
  </div>

  <div x-show="currentTab === 'fourth'" class="bg-white shadow sm:rounded-lg">
    <div x-data="{ isNew: false }">
      <span class="shadow-sm rounded-md float-right">
        <button type="button" @click="isNew = !isNew"
          class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out">
          Create new Activity
        </button>
      </span>



      {{-- start of a panel activities --}}
      <div class="fixed inset-0 overflow-hidden mt-12" x-show="isNew">
        <div class="absolute inset-0 overflow-hidden">
          <section class="absolute inset-y-0 pl-16 max-w-full right-0 flex">
            <div class="w-screen max-w-md">
              <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                <div class="flex-1 h-0 overflow-y-auto">
                  <header class="space-y-1 py-6 px-4 bg-green-700 sm:px-6">
                    <div class="flex items-center justify-between space-x-3">
                      <h2 class="text-lg leading-7 font-medium text-white">
                        New Activity
                      </h2>
                      <div class="h-7 flex items-center">
                        <button @click="isNew = !isNew" aria-label="Close panel"
                          class="text-indigo-200 hover:text-white transition ease-in-out duration-150">
                          <!-- Heroicon name: x -->
                          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </header>
                  <div class="flex-1 flex flex-col justify-between">
                    <form method="POST" action="{{ route('activities.store') }}">
                      @csrf
                      <input type="number" name="project_id" value="{{$project->id}}" hidden>
                      <div class="px-4 divide-y divide-gray-200 sm:px-6">
                        <div class="space-y-2 pt-6 pb-5">
                          <div class="space-y-1">
                            <label for="project_name" class="block text-sm font-medium leading-5 text-gray-900">
                              Activity name
                            </label>
                            <div class="relative rounded-md shadow-sm">
                              <input type="text" name="name"
                                class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150">
                            </div>
                          </div>
                          <div class="space-y-1">
                            <label for="description" class="block text-sm font-medium leading-5 text-gray-900">
                              Start Date
                            </label>
                            <div class="relative rounded-md shadow-sm">
                              <input type="date" name="start_date"
                                class="form-input block w-full sm:text-sm sm:leading-1">
                            </div>
                          </div>
                          <div class="space-y-2">
                            <label for="description" class="block text-sm font-medium leading-5 text-gray-900">
                              End Date
                            </label>
                            <div class="relative rounded-md shadow-sm">
                              <input type="date" name="end_date"
                                class="form-input block w-full  sm:text-sm sm:leading-1">
                            </div>
                          </div>

                          <div>
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Target</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                              <div class="relative flex-grow focus-within:z-10">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                  <!-- Heroicon name: users -->
                                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                      d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                  </svg>
                                </div>
                                <input name="target" type="number"
                                  class="form-input block w-full rounded-none rounded-l-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                  placeholder="John Doe">
                              </div>

                            </div>
                          </div>
                          <div>
                            <label for="price" class="block text-sm leading-5 font-medium text-gray-700">budget</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm sm:leading-5">
                                  $
                                </span>
                              </div>
                              <input name="budget" type="number"
                                class="form-input block w-full pl-7 pr-12 sm:text-sm sm:leading-5" placeholder="0.00">
                              <div class="absolute inset-y-0 right-0 flex items-center">

                              </div>
                            </div>
                          </div>
                          <div class="col-span-6 sm:col-span-3">
                            @include('partials.status')
                          </div>
                        </div>

                      </div>
                  </div>
                </div>
                <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                  <span class="inline-flex rounded-md shadow-sm">
                    <button @click="isNew = !isNew" type="button"
                      class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                      Cancel
                    </button>
                  </span>
                  <span class="inline-flex rounded-md shadow-sm">
                    <button type="submit"
                      class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                      Save
                    </button>
                  </span>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      {{-- end of panel --}}
    </div>

    <div class="px-4 py-5 sm:p-6 pt-10">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200 pt-24">
                <thead>

                  <tr>
                    <th
                      class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Activity Describtion
                    </th>
                    <th
                      class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Budget
                    </th>
                    <th
                      class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Target
                    </th>
                    <th
                      class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      Start Date
                    </th>
                    <th
                      class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                      End Date
                    </th>
                    <th class="px-6 py-3 bg-gray-50"></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($project->activities as $activity)
                  <tr class="bg-white">

                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                      {{$activity->name}}
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                      $ {{number_format($activity->budget)}}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                      {{$activity->target}}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                      {{($activity->start_date)->diffForHumans()}}

                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                      {{($activity->end_date)->diffForHumans()}}

                    </td>
                  </tr>
                  @empty
                  <!-- More rows... -->
                </tbody>
              </table>

              <h1>there are no added activities</h1>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection




{{-- <div class="shadow w-full bg-grey-light mt-2">
<div class="bg-orange-300 text-xs leading-none py-1 text-center text-blue-400" 

style="width: {{100*$project->end_date->diffInDays(now()) / $project->end_date->diffInDays($project->start_date)}}%">
{{100*$project->end_date->diffInDays(now()) / $project->end_date->diffInDays($project->start_date)}}
%</div>
</div> --}}
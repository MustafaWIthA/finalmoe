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
        <button @click="currentTab = 'first'"
        :class="{ 'active' : currentTab === 'first'}"  
        class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Project Summary
        </button>
        <button @click="currentTab = 'second'" class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Attachments
        </button>
        <button @click="currentTab = 'fourth'" class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Activities
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
        Project Districts
      </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          @forelse ($project->districts as $district)
              {{$district->name}},
          @empty
            <h1>nothin is added yet</h1>
          @endforelse
        </dd>
      <dt class="text-sm leading-5 font-medium text-gray-900">
        Project Regions
      </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          @forelse ($project->regions as $region)
              {{$region->name}},
          @empty
            <h1>nothin is added yet</h1>
          @endforelse
        </dd>
    </div>
  </div>

<div x-show="currentTab === 'second'" class="bg-white shadow sm:rounded-lg">
  <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
    <dt class="text-sm leading-5 font-medium text-gray-900">
      Attachments
    </dt>
    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
      <ul class="border border-gray-200 rounded-md">              
        @foreach ($project->documents as $document)
        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
          <div class="w-0 flex-1 flex items-center">
            <!-- Heroicon name: paper-clip -->
            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
            </svg>
            <span class="ml-2 flex-1 w-0 truncate">
              {{$document->type}}
            </span>
          </div>
          <div class="ml-4 flex-shrink-0">
            <a href="/storage/{{$document->name}}" target="_" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
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
    <div >
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
    <span class="shadow-sm rounded-md float-right" >
      <button type="button"  @click="isNew = !isNew" 
          class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out">
          Create new Activity
      </button>
    </span>
{{-- start of a panel activities --}}
<div class="fixed inset-0 overflow-hidden mt-12" x-show="isNew">
  <div class="absolute inset-0 overflow-hidden">
    <section class="absolute inset-y-0 pl-16 max-w-full right-0 flex" >
      <div class="w-screen max-w-md">
        <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
          <div class="flex-1 h-0 overflow-y-auto">
            <header class="space-y-1 py-6 px-4 bg-green-700 sm:px-6">
              <div class="flex items-center justify-between space-x-3">
                <h2 class="text-lg leading-7 font-medium text-white">
                  New Activity
                </h2>
                <div class="h-7 flex items-center">
                  <button @click="isNew = !isNew" aria-label="Close panel" class="text-indigo-200 hover:text-white transition ease-in-out duration-150">
                    <!-- Heroicon name: x -->
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
                      <input  type="text" name="name"
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
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                          </svg>
                        </div>
                        <input  name="target" type="number"
                            class="form-input block w-full rounded-none rounded-l-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5" placeholder="John Doe">
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
                      <input name="budget" type="number" class="form-input block w-full pl-7 pr-12 sm:text-sm sm:leading-5" placeholder="0.00">
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
              <button @click="isNew = !isNew"  type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                Cancel
              </button>
            </span>
            <span class="inline-flex rounded-md shadow-sm">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
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
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                     Title
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Budget
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Target
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Start Date
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
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
                    {{number_format($activity->budget)}}
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




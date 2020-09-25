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
    <div class="border-b border-green-200 bg-green-500">
      <nav class="-mb-px flex">
        <button @click="currentTab = 'first'"
        :class="{ 'active' : currentTab === 'first'}"  
        class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Project Summary
        </button>
        <button @click="currentTab = 'second'" class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Attachments
        </button>
        <button @click="currentTab = 'third'" class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Project Regions
        </button>
        <button @click="currentTab = 'fourth'" class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
          Billing
        </button>
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

</div>

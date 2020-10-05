<div>
  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
    <div class="sm:col-span-3">
     <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Status</label>
     <select wire:model="state_id" 
      class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
       <option>Select Status</option>
       @foreach (App\State::all() as $state)
       <option value="{{$state->id}}">{{$state->name}}</option>
       @endforeach
   </select>
   </div>
     <div class="sm:col-span-3">
       <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Type</label>
       <select wire:model="type_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
         <option>select Type</option>
         @foreach (App\Type::all() as $type)
       <option value="{{$type->id}}">{{$type->name}}</option>
         @endforeach
       </select>
     </div>
     
     <div class="sm:col-span-3">
       <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Proirity</label>
       <select wire:model="priority_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
         <option>select Proirity</option>
         @foreach (App\Priority::all() as $priority)
       <option value="{{$priority->id}}">{{$priority->name}}</option>
         @endforeach
       </select>
     </div>
     <div class="sm:col-span-3">
       <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Sectors</label>
       <select wire:model="sector_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
         <option>select Sector</option>
         @foreach (App\Sector::all() as $sector)
       <option value="{{$sector->id}}">{{$sector->name}}</option>
         @endforeach
       </select>
     </div>
     <div class="sm:col-span-2">
       <label for="location" class="block text-sm leading-5 font-medium text-gray-700">By Year</label>
       <select wire:model="year" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
         <option>Choose Year</option>
         <option>2016</option>
         <option>2017</option>
         <option>2018</option>
         <option>2019</option>
         <option>2020</option>
         <option>2021</option>
         <option>2022</option>
         <option>2023</option>
         
       </select>
     </div>
     <div class="sm:col-span-2">
       <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Region</label>
       <select wire:model="region_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
         <option>select Region</option>
         @foreach (App\Region::all() as $region)
       <option value="{{$region->id}}">{{$region->name}}</option>
         @endforeach
       </select>
     </div>
    
     <div class="sm:col-span-2">
       <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Districts</label>
       <select wire:model="district_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
         <option>select Districts</option>
         @foreach (App\District::all() as $district)
       <option value="{{$district->id}}">{{$district->name}}</option>
         @endforeach
       </select>
     </div>
   {{$sector_id}}
     <div class="sm:col-span-6">
       {{-- <button type="submit" class=" w-full justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out" 
         wire:click="change">
         Search
       </button> --}}
     </div>
     
    </div>
 
   
 
     
    
     <div class="mt-10">

      {{-- <div class="mb-5">
        <input wire:model="search" class="block w-full h-full pl-8 pr-3 py-2 rounded-md text-gray-900 
        placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 sm:text-sm" " 
        type="search" placeholder="Search projects...">
      </div> --}}
      <table class="min-w-full divide-y divide-gray-200">
        <thead class=" bg-indigo-600 text-white">
        <tr>
          <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
            <a  wire:click.prevent="sortBy('title')" role="button" href="#">
              Title
              @include('includes.sorticon', ['field' => 'name'])
            </a>
          </th>
          <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
            <a  role="button" wire:click.prevent="sortBy('budget')" role="button" href="#">
              Budget
            @include('includes.sorticon', ['field' => 'name'])
          </a> 
        </th>
          <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
              <a  role="button" href="#">
                Type
              {{-- @include('includes.sorticon', ['field' => 'name']) --}}
            </a> 
          </th>
          
          <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
              <a  role="button" href="#">
                Status
              {{-- @include('includes.sorticon', ['field' => 'name']) --}}
            </a> 
          </th>
          <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
            <a  wire:click.prevent="sortBy('start_date')" role="button" href="#">
              Start Date
              @include('includes.sorticon', ['field' => 'name'])
            </a>  
           
          </th>
          <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
            <a  wire:click.prevent="sortBy('start_date')" role="button" href="#">
              End Date
              @include('includes.sorticon', ['field' => 'name'])
            </a> 
          </th>
          <th class="px-6 py-3 "></th>
        </tr>
      </thead>
      <tbody class="">
                   @forelse ($selectedprojects as $project)
                    <tr class="bg-white">
                      <td class="px-6 flex-shrink py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                      <a href="{{route('projects.show', $project->id)}}">{{Str::limit($project->title, 40)}} </a>
                      </td>
                      <td class="px-6 flex-shrink  py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        <a href="#">$ {{$project->budget}} </a>
      
                      </td>
                      <td class="px-6 flex-shrink  py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        <a href="#">{{$project->type->name}} </a>
      
                      </td>
                      <td class="px-6 flex-shrink  py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        <a href="#">{{$project->state->name}} </a>
      
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        {{$project->start_date}}
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        {{$project->end_date}}
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                        <a href="{{route('projects.show', $project->id)}}" class="text-indigo-600 hover:text-indigo-900">View</a>
                        @hasrole('SuperAdmin|Editor')
                        <a href="{{route('projects.edit', $project->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        @endhasrole
                      </td>
                    </tr>
                    @empty
                  </tbody>
                </table>
                {{ $selectedprojects->links() }}
      
              </div>
       <p class="">nothing matches your over thinking criteria</p>
     @endforelse
 
 </div>
</div>



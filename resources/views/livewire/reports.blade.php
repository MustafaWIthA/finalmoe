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
     
     <div class="sm:col-span-2">
       <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Proirity</label>
       <select wire:model="proirity_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
         <option>select Proirity</option>
         @foreach (App\Priority::all() as $priority)
       <option value="{{$priority->id}}">{{$priority->name}}</option>
         @endforeach
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
   
     <div class="sm:col-span-6">
       <button type="submit" class=" w-full justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out" 
         wire:click="change">
         Search
       </button>
     </div>
     
    </div>
 
    {{$state_id}}
 
     
     @forelse ($selectedprojects as $project)
       <li> {{$project->title}} </li>
     @empty
       <p class="">Nothing back</p>
     @endforelse
 
 </div>
</div>



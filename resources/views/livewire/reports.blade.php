<div>
   <div>
    <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Status</label>
    <select wire:model="state_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
    
      <option>select this</option>
      @foreach (App\State::all() as $state)
    <option value="{{$state->id}}">{{$state->name}}</option>
      @endforeach
    </select>
  </div>
  <hr><br>
    <div>
      <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Type</label>
      <select wire:model="type_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
        <option>select this</option>
        @foreach (App\Type::all() as $type)
      <option value="{{$type->id}}">{{$type->name}}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Region</label>
      <select wire:model="type_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
        <option>select this</option>
        @foreach (App\Region::all() as $region)
      <option value="{{$region->id}}">{{$region->name}}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Proirity</label>
      <select wire:model="type_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
        <option>select this</option>
        @foreach (App\Priority::all() as $priority)
      <option value="{{$priority->id}}">{{$priority->name}}</option>
        @endforeach
      </select>
    </div>
  

    <button wire:click="change">
      Create
    </button>
    @forelse ($projects as $project)
      <li> {{$project->title}} </li>
    @empty
      <p>Nothing back</p>
    @endforelse
{{$foo}}
{{$state_id}}
{{$type_id}}
</div>



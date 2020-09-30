<div>

   <div>
    <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Location</label>
    <select wire:model="state_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
    @foreach ($status as $state)
    <option value="{{$state->id}}">{{$state->name}}</option>
      @endforeach
    </select>
    
  </div>
  <hr><br>
  <div>
    <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Location</label>
    <select wire:model="type_id" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
    @foreach ($types as $type)
    <option value="{{$type->id}}">{{$type->name}}</option>
      @endforeach
    </select>
  </div>

  @foreach ($projects as $project)
      {{$project->title}} <br>
  @endforeach
</div>



<label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project State</label>
<select name="state_id" class="w-full form-control form-select">
    <option value="" selected="selected" disabled="disabled">Choose an option</option> 
    @foreach ($Status as $State)
  <option value="{{$State->id}}">{{$State->name}}</option>
  @endforeach  
</select>
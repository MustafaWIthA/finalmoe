<label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Type</label>
<select name="type_id" class="w-full form-control form-select">
    <option value="" selected="selected" disabled="disabled">Choose an option</option> 
    @foreach ($Types as $Type)
  <option value="{{$Type->id}}">{{$Type->name}}</option>
  @endforeach  
</select>
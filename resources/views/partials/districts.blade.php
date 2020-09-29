


<label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Donor(s)</label>
<select multiple="multiple" id="districts" name="districts[]" class="districts w-full form-control form-select">
    {{-- <option value="" selected="selected" disabled="disabled">Choose a Project Donor(s)</option>  --}}
    @foreach ($Districts as $district)
  <option value="{{$district->id}}">{{$district->name}}</option>
  @endforeach  
</select>
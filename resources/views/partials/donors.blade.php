


<label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Donor(s)</label>
<select multiple="multiple" id="donors" name="donors[]" class="donors w-full form-control form-select">
    {{-- <option value="" selected="selected" disabled="disabled">Choose a Project Donor(s)</option>  --}}
    @foreach ($Donors as $Donor)
  <option value="{{$Donor->id}}">{{$Donor->name}}</option>
  @endforeach  
</select>

<label for="Project" class="block text-sm font-medium leading-5 text-gray-700">Project Agency(s)</label>
<select multiple="multiple" name="agencies[]" id="agencies" class="agencies w-full form-control form-select">
    {{-- <option value="" selected="selected" disabled="disabled">Choose a Project Agency(s)</option>  --}}
    @foreach (\App\Agency::all() as $Agency)
  <option value="{{$Agency->id}}">{{$Agency->name}}</option>
  @endforeach  
</select>
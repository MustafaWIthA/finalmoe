<div>
    @foreach ($Priorities as $Priority)
    <div class="mt-4">
    <div class="flex items-center">
        <input  type="checkbox" name="priorities[]" value="{{$Priority->id}}"
        class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
        <label for="push_everything" class="ml-3">
        <span class="block text-sm leading-5 font-medium text-gray-700">{{$Priority->name}}</span>
        </label>
      </div> 
    </div>
    @endforeach
</div>

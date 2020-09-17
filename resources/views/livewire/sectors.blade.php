<div>
    @foreach ($Sectors as $sector)
    <div class="mt-4">
    <div class="flex items-start">
        <div class="flex items-center h-5">
          <input  type="checkbox" name="sectors[]" value="{{$sector->id}}"          
          class="form-checkbox h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
        </div>
        <div class="ml-3 text-sm leading-5">
          <label for="comments" class="font-medium text-gray-700">{{$sector->name}}</label>
          {{-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> --}}
        </div>
      </div>
    </div>   
    @endforeach
</div>

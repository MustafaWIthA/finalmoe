<div class="relative w-full text-gray-400 focus-within:text-gray-600">
  <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
    </svg>
  </div>
  
  <input class="block w-full h-full pl-8 pr-3 py-2 p-3 rounded-md text-gray-900 
  placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 sm:text-sm"  type="text" wire:model="search" >

</div><br>
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  <a wire:click.prevent="sortBy('title')" role="button" href="#">
                    Title
                    @include('includes.sorticon', ['field' => 'name'])
                  </a>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    <a wire:click.prevent="sortBy('type')" role="button" href="#">
                      Type
                    @include('includes.sorticon', ['field' => 'name'])
                  </a> 
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Start Date
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    End Date
                </th>
                <th class="px-6 py-3 bg-gray-50"></th>
              </tr>
            </thead>
            <tbody class="">
              @foreach ($projects as $project)
              <tr class="bg-white">
                <td class="px-6 flex-shrink py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                  <a href="#">{{$project->title}} </a>
                </td>
                <td class="px-6 flex-shrink  py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  <a href="#">{{$project->type}} </a>

                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  {{$project->start_date}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  {{$project->end_date}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

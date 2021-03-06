<div>

<div class="mb-5">
  <input wire:model="search" class="block w-full h-full pl-8 pr-3 py-2 rounded-md text-gray-900 
  placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 sm:text-sm" " 
  type="search" placeholder="Search projects...">
</div>
<table class="min-w-full divide-y divide-gray-200">
  <thead class=" bg-blue-500 text-white">
  <tr>
    <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
      <a  wire:click.prevent="sortBy('title')" role="button" href="#">
        Title
        @include('includes.sorticon', ['field' => 'name'])
      </a>
    </th>
    <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
      <a  role="button" wire:click.prevent="sortBy('budget')" role="button" href="#">
        Budget
      @include('includes.sorticon', ['field' => 'name'])
    </a> 
  </th>
    <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
        <a  role="button" href="#">
          Type
        {{-- @include('includes.sorticon', ['field' => 'name']) --}}
      </a> 
    </th>
    
    <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
        <a  role="button" href="#">
          Status
        {{-- @include('includes.sorticon', ['field' => 'name']) --}}
      </a> 
    </th>
    <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
      <a  wire:click.prevent="sortBy('start_date')" role="button" href="#">
        Start Date
        @include('includes.sorticon', ['field' => 'name'])
      </a>  
     
    </th>
    <th class="px-6 py-3 text-left text-xs leading-4 font-semibold  uppercase tracking-wider">
      <a  wire:click.prevent="sortBy('start_date')" role="button" href="#">
        End Date
        @include('includes.sorticon', ['field' => 'name'])
      </a> 
    </th>
    <th class="px-6 py-3 "></th>
  </tr>
</thead>
<tbody class="">
              @foreach ($projects as $project)
              <tr class="bg-white">
                <td class="px-6 flex-shrink py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                <a href="{{route('projects.show', $project->id)}}">{{Str::limit($project->title, 40)}} </a>
                </td>
                <td class="px-6 flex-shrink  py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  <a href="#">$ {{$project->budget}} </a>

                </td>
                <td class="px-6 flex-shrink  py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  <a href="#">{{$project->type->name}} </a>

                </td>
                <td class="px-6 flex-shrink  py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  <a href="#">{{$project->state->name}} </a>

                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  {{$project->start_date}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                  {{$project->end_date}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                  <a href="{{route('projects.show', $project->id)}}" class="text-indigo-600 hover:text-indigo-900">View</a>
                  @hasrole('SuperAdmin|Editor')
                  <a href="{{route('projects.edit', $project->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  @endhasrole
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{ $projects->links() }}

        </div>

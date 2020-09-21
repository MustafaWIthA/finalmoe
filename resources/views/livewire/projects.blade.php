<table class="min-w-full divide-y divide-gray-200">
  <thead>
  <tr>
    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
      <a  role="button" href="#">
        Title
        {{-- @include('includes.sorticon', ['field' => 'name']) --}}
      </a>
    </th>
    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
        <a  role="button" href="#">
          Type
        {{-- @include('includes.sorticon', ['field' => 'name']) --}}
      </a> 
    </th>
    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
        <a  role="button" href="#">
          State
        {{-- @include('includes.sorticon', ['field' => 'name']) --}}
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
                <a href="{{route('projects.show', $project->id)}}">{{Str::limit($project->title, 40)}} </a>
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
                  <a href="{{route('projects.edit', $project->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{ $projects->links() }}

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
        <a wire:click.prevent="sortBy('state')" role="button" href="#">
          State
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
                <a href="{{route('projects.show', $project->id)}}">{{$project->title}} </a>
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
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                </td>
              </tr>
              @endforeach

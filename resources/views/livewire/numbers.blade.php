<div>
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          This Year: {{$thisyear}}
        </h3>
        <div class="sm:col-span-2">
          <label for="location" class="block text-sm leading-5 font-medium text-gray-700">By Year</label>
          <select wire:model="year" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
            <option>Choose Year</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            
          </select>
        </div>
        <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2">
          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
              <dl>
                <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                  Total Projects
                </dt>
                <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                    {{$totalprojects}}
                </dd>
              </dl>
            </div>
          </div>
          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
              <dl>
                <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                  Total Budget
                </dt>
                <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                    ${{number_format($totalbudget)}}
                </dd>
              </dl>
            </div>
          </div>
          {{-- <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
              <dl>
                <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                  Avg. Click Rate
                </dt>
                <dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
                  24.57%
                </dd>
              </dl>
            </div>
          </div> --}}
        </div>
      </div>
      
</div>

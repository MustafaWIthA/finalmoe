<div>
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          This Year: {{$thisyear}}
        </h3>
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

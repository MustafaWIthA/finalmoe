<div>  
    <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-1 lg:grid-cols-2">
        
        <div class="bg-red-100 overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
             Projects Type
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
              
              <canvas id="type"></canvas>
            </div>
          </div>
         
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects  Sub Sector 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
                <canvas id="sector" ></canvas>       
              </div>
          </div>
         
        </div>
       
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects  Region 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
             
              <canvas id="region" ></canvas>

            </div>
          </div>
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects  Status 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
             
              <canvas id="status"></canvas>

            </div>
          </div>
        </div>
      </div>
</div>


{{--  --}}
@include('scripts.type')
@include('scripts.sector')
@include('scripts.region')
@include('scripts.status')
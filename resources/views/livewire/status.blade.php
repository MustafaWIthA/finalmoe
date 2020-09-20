<div>  
    <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-1 lg:grid-cols-2">
        
        <div class="bg-red-100 overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
             Projects Type
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
              
              <canvas id="myChart2"></canvas>
            </div>
          </div>
         
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects  Sub Sector 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
                <canvas id="sectorprojectcount" ></canvas>       
              </div>
          </div>
         
        </div>
       
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects  Region 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
             
              <canvas id="barchartRegions" ></canvas>

            </div>
          </div>
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects  Status 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
             
              <canvas id="myChart"></canvas>

            </div>
          </div>
        </div>
      </div>
</div>


{{--  --}}
<script>

new Chart(document.getElementById("sectorprojectcount"), {
    type: 'horizontalBar',
    data: {
      labels: [
        @foreach ($SectorProjects as $SectorProject)
          '{{$SectorProject->name}}',
        @endforeach
      ],
      datasets: [
        {
         
        maxBarThickness: 3,
        minBarLength: 3,
          label: "Projects (Sector)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45870","#c45450","#c80850","#c32850"],
          data: [
            @foreach ($SectorProjects as $SectorProject)
                  {{$SectorProject->projects_count}},
           @endforeach
          ]
        }
      ]
    },
    options: {
      scales: {
            xAxes: [{
                stacked: true
            }],
            
        },
      legend: { display: false },
      title: {
        display: false,
        text: 'Projects per Sector'
      }
    }
    
});

</script>

<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'horizontalBar',
      data: {
          labels: [
            @foreach ($StateProjects as $StateProject)
                '{{$StateProject->name}}',
            @endforeach
            ],
          datasets: [{
              label: '# of Projects',
              
              data: [ 
                @foreach ($StateProjects as $StateProject)
                  {{$StateProject->projects_count}},
                @endforeach
              ],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                 
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
               
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  },
                  // gridLines: {
                  //     display:false
                  // } 
              }]
          }
      }
  });
  </script>
<script>
  var ctx = document.getElementById('barchartRegions').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            @foreach ($RegionProjects as $RegionProject)
                '{{$RegionProject->name}}',
            @endforeach
            ],
          datasets: [{
              label: '# of Projects',
              
              data: [ 
                @foreach ($RegionProjects as $RegionProject)
                  {{$RegionProject->projects_count}},
                @endforeach
              ],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                 
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
               
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  },
                  // gridLines: {
                  //     display:false
                  // } 
              }]
          }
      }
  });
  </script>

  <script >
     var ctx = document.getElementById('myChart2').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [
            @foreach ($TypeProjects as $TypeProject)
                '{{$TypeProject->name}}',
            @endforeach
          ],
          datasets: [{
              label: '# of Projects',
              
              data: [ 
                @foreach ($TypeProjects as $TypeProject)
                {{$TypeProject->projects_count}},
               @endforeach
              ],
              backgroundColor: ["Red", "Blue","Green"],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
               
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: false
                  },
                  gridLines: {
                      display:false
                  } 
                  
              }]
          }
      }
  });
  </script>

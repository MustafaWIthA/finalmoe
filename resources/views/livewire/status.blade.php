<div>
    <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-1 lg:grid-cols-2">
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects Per Sector
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
                <canvas id="sectorprojectcount" ></canvas>       
              </div>
          </div>
         
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Total Projects
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
              
              <canvas id="myChart2"></canvas>
            </div>
          </div>
         
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects by Region 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
             
              <canvas id="chart-area"></canvas>

            </div>
          </div>
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg">
          <h3 class="text-xl p-3 text-center leading-10 font-bold text-white bg-blue-500">
            Projects by Region 
          </h3>
          <div class="px-4 py-5 sm:p-6">
            <div class="flex items-center">
             
              <canvas id="chart-area"></canvas>

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
      type: 'bar',
      data: {
          labels: ['Running', 'Complete', 'all'],
          datasets: [{
              label: '# of Projects',
              
              data: [ {{$running}}, {{$Suspended}},{{$allprojects}}],
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
                  }
              }]
          }
      }
  });
  </script>

  <script >
     var ctx = document.getElementById('myChart2').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['Running', 'Complete', 'all'],
          datasets: [{
              label: '# of Projects',
              
              data: [ {{$running}}, {{$Suspended}},{{$allprojects}}],
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
                  }
              }]
          }
      }
  });
  </script>

  <script>
    var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'pie',
			data: {
				datasets: [{
          label: '# of Projects',

					data: [
            {{$running}}, {{$Suspended}},{{$allprojects}}
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'UNICEF',
					'CARE',
					'SAVE',
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
		});

	
  </script>
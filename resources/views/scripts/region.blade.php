<script>
      // regions
      var ctx = document.getElementById('region').getContext('2d');
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
                  xAxes: [{
                      ticks: {
                        min: 0
                      },
                      // gridLines: {
                      //     display:false
                      // } 
                  }]
              }
          }
      });
      </script>
    
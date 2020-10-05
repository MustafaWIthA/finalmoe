<script>
      var ctx = document.getElementById('type').getContext('2d');
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
                  xAxes: [{
                      ticks: {
                          beginAtZero: false
                      },
                      gridLines: {
                          display:false
                      } 
                      
                  }],
                  
              }
          }
      });
      </script>
    
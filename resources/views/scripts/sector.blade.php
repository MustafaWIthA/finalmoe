<script>
new Chart(document.getElementById("sector"), {
        type: 'horizontalBar',
        data: {
          labels: [
            @foreach ($SectorProjects as $SectorProject)
              '{{$SectorProject->name}}',
            @endforeach
          ],
          datasets: [
            {
              
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
       
        
    });
    
    </script>
    
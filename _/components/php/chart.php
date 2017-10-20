<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            
            <?php 
            
                $element_text = ['Books', 'clients', 'users'];
                $element_count = [$books_count, $client_count, $user_count];
            
            for($i =0;$i < 3; $i++){
                
                echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
            }
            
            ?>
            
//          ['2014', 1000]
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
<div id="columnchart_material" style="width: 'auto'; height: 500px; margin-left: 10px; padding: 5px;"></div>
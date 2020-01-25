<html>
  <head>
    <meta charset=utf-8>

  </head>
<body>
<Table>
  <tr>
    <td>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Choix", "Classe Préparatoire","BTS","DUT","Faculté"],
       <?php
       
        $db = new SQLITE3("population.db");
        
        $result = $db->query("select * from population");
        while ($row = $result->fetchArray()) 
          echo "['" . $row[0] ."'," . $row[1] . "," . $row[2] . "],\n";
       ?> 
        ]);
        var options = {
          chart: {
            title: 'Population francaise',
            subtitle: 'Source : Insee. Estimations de population (résultats provisoires arrêtés fin 2013)',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
<div id="barchart_material" style="width: 900px; height: 500px;"></div>
    </td>
  </tr>
</Table>
</body>
</html>
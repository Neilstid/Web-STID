<!DOCTYPE html>

<html>
<head>
    <title>Reporting DUT</title>
    <meta charset=utf-8>
    <link href = "monstyle.css" rel= "stylesheet">
</head>

<body>
<center><h1>Reporting réponse formulaire DUT</h1>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Choix', 'Effectif'],
          <?php
            $db = new SQLite3('enquete.db');
            $results = $db->query('SELECT Q1Rep1, COUNT(*) FROM enquete  where Q1Rep1 != "NA" GROUP BY Q1Rep1');
            while ($row = $results->fetchArray())
                echo "['" . $row[0] . "'," . $row[1] . "],\n";
        ?>
        ]);
        var options = {
          title: 'Question 1.1',
          width: 700,
          legend: { position: 'none' },
          chart: { title: "Poursuite d'étude",
                   subtitle: '2eme choix des lycéens' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Effectifs'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Q1.1'));
        chart.draw(data, options);
      }
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Choix', 'Effectif'],
          <?php
            $db = new SQLite3('enquete.db');
            $results = $db->query('SELECT Q1Rep2, COUNT(*) FROM enquete where Q1Rep2 != "NA" GROUP BY Q1Rep2');
            while ($row = $results->fetchArray())
                echo "['" . $row[0] . "'," . $row[1] . "],\n";
        ?>
        ]);
        var options = {
          title: 'Question 1.2',
          width: 700,
          legend: { position: 'none' },
          chart: { title: "Poursuite d'étude",
                   subtitle: '2eme choix des lycéens' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Effectifs'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Q1.2'));
        chart.draw(data, options);
      }
 </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Choix', 'Effectif'],
          <?php
            $db = new SQLite3('enquete.db');
            $results = $db->query('SELECT Q2, COUNT(*) FROM enquete where Q2 != "NA" GROUP BY Q2');
            while ($row = $results->fetchArray())
                echo "['" . $row[0] . "'," . $row[1] . "],\n";
        ?>
        ]);
        var options = {
          title: 'Question 2',
          width: 700,
          legend: { position: 'none' },
          chart: { title: "Poursuite d'étude",
                   subtitle: '2eme choix des lycéens' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Effectifs'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Q2'));
        chart.draw(data, options);
      }
 </script>
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Choix', 'Effectif'],
          <?php
            $db = new SQLite3('enquete.db');
            $results = $db->query('SELECT Q3, COUNT(*) FROM enquete where Q3 != "NA" GROUP BY Q3');
            while ($row = $results->fetchArray())
                echo "['" . $row[0] . "'," . $row[1] . "],\n";
        ?>
        ]);
        var options = {
          title: 'Question 3',
          width: 700,
          legend: { position: 'none' },
          chart: { title: "Poursuite d'étude",
                   subtitle: '2eme choix des lycéens' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Effectifs'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Q3'));
        chart.draw(data, options);
      }
 </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Choix', 'Effectif'],
          <?php
            $db = new SQLite3('enquete.db');
            $results = $db->query('SELECT Q4, COUNT(*) FROM enquete where Q4 != "NA" GROUP BY Q4');
            while ($row = $results->fetchArray())
                echo "['" . $row[0] . "'," . $row[1] . "],\n";
        ?>
        ]);
        var options = {
          title: 'Question 4',
          width: 700,
          legend: { position: 'none' },
          chart: { title: "Poursuite d'étude",
                   subtitle: '2eme choix des lycéens' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Effectifs'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Q4'));
        chart.draw(data, options);
      }
 </script>
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Choix', 'Effectif'],
          <?php
            $db = new SQLite3('enquete.db');
            $results = $db->query('SELECT Q5, COUNT(*) FROM enquete where Q5 != "NA" GROUP BY Q5');
            while ($row = $results->fetchArray())
                echo "['" . $row[0] . "'," . $row[1] . "],\n";
        ?>
        ]);
        var options = {
          title: 'Question 5',
          width: 700,
          legend: { position: 'none' },
          chart: { title: "Poursuite d'étude",
                   subtitle: '2eme choix des lycéens' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Effectifs'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Q5'));
        chart.draw(data, options);
      }
 </script>
    
<table>
    <tr>
        <td id="tQ1">
           <div id="Q1.1" style="width: 0px; height: 250px;"></div> 
        </td>
        <td>
            <div id="Q1.2" style="width: 0px; height: 250px;"></div> 
        </td>
    </tr>
    <tr>
        <td id="tQ2">
            <div id="Q2" style="width: 0px; height: 200px;"></div>
        </td>
        <td>
            <div id="Q3" style="width: 0px; height: 200px;"></div>
        </td>
    </tr>
        <tr>
        <td id="tQ4">
            <div id="Q4" style="width: 0px; height: 200px;"></div>
        </td>
        <td>
            <div id="Q5" style="width: 0px; height: 200px;"></div>
        </td>
    </tr>
</table>

</body>
</html>

google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Suspected', 'Infected', 'Normal', 'Recovered', 'Dead', 'Average'],
          ['2020/05',  165,      938,         522,             998,           450,      614.6],
          ['2020/06',  135,      1120,        599,             1268,          288,      670],
          ['2020/07',  157,      1167,        587,             807,           397,      500],
          ['2020/08',  139,      1110,        615,             968,           215,      200.4],
          ['2020/09',  136,      691,         629,             1026,          366,      459]
        ]);

        var options = {
          title : 'The journey of covid-19',
          vAxis: {title: 'cases'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
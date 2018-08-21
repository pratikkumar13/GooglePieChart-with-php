# GooglePieChart-with-php

Create PieChart using Google in php


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
 
  <script type="text/javascript">  		  

	google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day']
			,['Breakfast',62.18],['Salad',14.29],['Chicken',0.84]]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    
	</script>
 
 
 <div id="piechart_3d" style="width: 1000px; height: 500px;" class="col-md-12 col-sm-12 col-xs-12"></div>   

<?php

   	$n1=arrary('Breakfast'=>62.18,'Salad'=>14.29,'Roti'=>0.84,'Chicken'=>0.84);
   
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
 <script type="text/javascript">  		  

	google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day']
			,<?php	foreach($n1 as $key => $value)
				{		
					 $asdd=",['".$key."',".$value."]"; 
					
					echo $asdd;
				} ?>]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    
	</script>
  
  ?>

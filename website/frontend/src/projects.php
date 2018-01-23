<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Inaki Gonzalo">

<title>Projects</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

<script>
var offset = new Date().getTimezoneOffset();
 Highcharts.setOptions({
        global: {
            timezoneOffset: offset
        }
    });
</script>

<!-- Custom styles for this template -->
<link href="cover.css" rel="stylesheet">

</head>

<body>
	<div class="site-wrapper">

		<div class="outer" style="width: 1060px">
			<?php 
			(function () {
			$projectsActive="active";
			$homeActive="";
			include 'navbar.php';
			})();?>
		
			
			<main role="main" class="inner cover"> <br></br>

			<div class="jumbotron"
				style="background-color: PeachPuff !important;">
				<h4 style="color: black; text-align: left;">Weather Station</h4>
				<p style="color: black; text-align: left;">I have built a weather
					station that consists of two sensors and a Raspberry Pi. The data
					from the sensors is securely uploaded to a server through <a style=" color: green;" href="https://github.com/inaki-gonzalo/secure_api">my API.</a>
					It is stored on a PostgrterSQL database and displayed here using
					Highcharts.</p>
				<table style="width: 100%;">
					<tr>
						<td style="width: 450px">
							<div id="WeatherStationTemperature"></div>
						</td>
						<td style="max-width: 50px"></td>
						<td style="width: 450px">
							<div id="WeatherStationPressure"></div>
						</td>
					</tr>

				</table> 
				
<?php
(function () {
    $chartName = 'WeatherStationTemperature';
    $title = 'Temperature';
    $units = 'Celsius';
    $quantity = 'Temperature';
    $sensor_id='1';
    include ('chart_template.php');
})();

(function () {
    $chartName = 'WeatherStationPressure';
    $title = 'Pressure';
    $units = 'hPa';
    $quantity = 'Pressure';
    $sensor_id='2';
    include ('chart_template.php');
})();

?>
				
				
     

			</div> <!--  end jumbotron -->
			<!--  
			<div class="jumbotron">
				<h3 class="display-4">Jumbotron heading</h3>

			</div>

			<div class="jumbotron">
				<h3 class="display-4">Jumbotron heading</h3>

			</div>
			-->
			


			</main>

			<footer class="mastfoot">
				<div class="inner">
					<p>Content copyright <?php echo date("Y"); ?>. I&ntilde;aki Gonzalo. All rights reserved.  </p>
				</div>
			</footer>


		</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/popper.min.js"></script>
	<script src="assets/bootstrap.min.js"></script>


</body>
</html>

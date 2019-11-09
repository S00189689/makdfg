<!DOCTYPE html>
<html>
	<head>
		<title> Weather Readings </title>
	</head>

	<body>
		<h1> Readings from sensehat </h1>
		<hr />
		
		<?php
			if ($_GET){
			$readings = exec(‘sudo python /home/pi/Desktop/sense_readings.py ‘.$_GET[data]);
			}
		?>
		<from NAME=”sense” METHOD=”GET”>
		<button name=”sens”>Get Data </button>
		<div id=”log” style==”width:180px; height:30px; text-align:center;>
		<?php echo $readings;?>
		</div>
		</from>
	</body>
</html>		

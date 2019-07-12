<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title> Seletor de  Cores</title>
</head>
<body>
	<h2>Seletor de Cores Interativos</h2>
	<?php

	   $r = $_POST ['red'];
	   $g = $_POST ['green'];
	   $b = $_POST ['blue'];

	   $rgb = $r . ',' . $g . ',' . $b;
	   ?>
	   R: <?php echo $r; ?>
	   G: <?php echo $g; ?>
	   B: <?php echo $b; ?>
	   <br/><br/>
	   <div style="width:150px; height: 150px; background-color: rgb(<?php echo $rgb;?>)"> </div>

	</body>
	</html>

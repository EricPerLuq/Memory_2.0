<!DOCTYPE html>
<html>
<head>
	<title>Ranking</title>
</head>
<body>
	<style type="text/css">
	body{
			align-content: center;
			background-image: url("./imgs/fondo-bienvenida.jpg");
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-attachment: fixed;
			width: 100%;
			height: length;
			display: flex;
			padding-top: 100px;
		}
		table{
			margin:auto;			

		}
		tr{
			border-color: solid black;
		}
		td{
			border-color: solid black;

		}
		</style>
		<table>
		<tr>
		<?php
		$archivo = fopen("HallOfFame.txt", "r");
 		while (!feof($archivo)) {
 			$linea = fgets($archivo);
    		echo "<td>".$linea."</td>"."</tr>";	
			} 
			fclose($archivo);
		?>
		</table>
</body>
</html>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ranking</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/ranking.css">
</head>
<body>	
	<img class="Mascara" src="imgs/Mascara.png">

	<div class="title">
		<h1>RANKING</h1>
	</div>
	<img class="Mascara2" src="imgs/Circle-Mask.png">
	
	<table>
		<tr>
			<th>Nombre</th><th>Puntuación</th>
		</tr>
		<tr>
		<?php
			echo 	"<h2><span class='casilla'>".$_SESSION["nombreUsuario"]."</span></h2>" ;
		$records=[];
		$ranking=[];
		$archivo = fopen("HallOfFame.txt","r");
		while (!feof($archivo)) {
			$linea = fgets($archivo);
			$records1=explode("=>", $linea);
			$records= array_map('intval',explode("=>", $linea));
			array_splice($records,$records[0],0,$records1[0]);
			
			if (empty($linea)) {
		 		unset($linea);
		 	}else{
		 	array_push($ranking, $records);}
		}
		foreach ($ranking as $key => $row){

		    $record[$key]  = $row['2'];
		}  
		array_multisort($record, SORT_DESC, $ranking);
		foreach ($ranking as $value1) {
				    			echo "<td>".$value1[0]."</td>"."<td>".$value1[2]."</td>"."</tr>";	

		}					fclose($archivo);
				   
		?>
	</table>

	<img class="Img" src="imgs/It's_all.png">
	<div class="Img">
		<a class="casilla" href="index.php">INICIO</a>
	</div>

</body>
</html>
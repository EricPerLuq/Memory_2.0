<!DOCTYPE html>
<html>
<head>
	<title>Página ganador</title>
	<script type="text/javascript" src="https://dl.dropboxusercontent.com/s/qhmfmwu7ckig9l2/fartificiales.js"></script>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/ganar.css">
</head>
<body>

	<style type="text/css">

		body {
			width: 100%;
			display: grid;
			grid-template-colums: 1fr;
			grid-template-row: 1fr 1fr 1fr;
		}

		h1 {
			background-image: url(imgs/fuegos_artificiales.gif);
    		background-size: cover;
    		color: transparent;
			-moz-background-clip: text;
			-webkit-background-clip: text;
			text-transform: uppercase;
			text-align: center;
			font-size: 120px;
			line-height: .75;
			margin: 10px 0;
		}	 
	</style>

	<div class="title">
		<h1>¡Enhorabuena <br/>Has Ganado!</h1>
	</div>

	<div class="Div-flex">
		<div class="Div-marco">
			<div class="Gif">
				<img  src="imgs/Juego_Calamar2.gif">	
			</div>


			<form action="" method="POST">
				<p class="contadorDeIntentos">
				<?php 
					$intentos= $_GET['Errores'];
					$tiempoRes=$_GET['Tiempo'];
					$nivel= $_GET['lvl'];
					$nombre=$_GET['Nombre'];
					$varTiempo=array_map('intval',explode(": ", $tiempoRes));
				?> 
				</p>		
				
			</form>
		</div>	
	</form>
</div>
<?php
if($nivel==1){
	$tiempo=30;
	$formula=(($varTiempo[1]*100)/($tiempo/2))-($intentos*5);}
if($nivel==2){
	$tiempo=45;
$formula=(($varTiempo[1]*100)/($tiempo/2))-($intentos*4);}
if($nivel==3){
	$tiempo=60;
$formula=(($varTiempo[1]*100)/($tiempo/2))-($intentos*3);}
if($nivel==4){
	$tiempo=85;
$formula=(($varTiempo[1]*100)/($tiempo/2))-($intentos*2);}
if($nivel==5){
	$tiempo=120;
$formula=(($varTiempo[1]*100)/($tiempo/2))-($intentos*1);}
	
	$file = fopen('HallOfFame.txt',"a");
		//fwrite($file,$_POST["Nombre"]."[".$Intentos."]"."[".$Tiempo."]"."\n");
	if ($formula>100) {
		$formula=100-$intentos;
	}
		fwrite($file, $nombre."=>".$formula."\n");
	
		fclose($file);
	

?>
	</div>

	<div class="botones">
		<form action="index.php">
			<input class="casilla" type="submit" value="Inicio"/>
		</form>
		<form action="Ranking.php">
			<input class="casilla" type="submit" value="Ranking"/>
		</form>
	</div>


	
</body>

</html>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Página ganador</title>
	<script type="text/javascript" src="https://dl.dropboxusercontent.com/s/qhmfmwu7ckig9l2/fartificiales.js"></script>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/ganar.css">
</head>
<body>
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
					$Intentos= $_GET['Errores'];
					$TiempoRes=$_GET['Tiempo'];
					$Nivel= $_GET['lvl'];
					$Nombre=$_GET['Nombre'];
					$varTiempo=array_map('intval',explode(": ", $TiempoRes));
				?> 
				</p>		
				
			</form>
		</div>	
	</form>
</div>
<?php
if($Nivel==1){
	$Tiempo=30;
	$formula=(($varTiempo[1]*100)/($Tiempo/2))-($Intentos*5);}
if($Nivel==2){
	$Tiempo=45;
$formula=(($varTiempo[1]*100)/($Tiempo/2))-($Intentos*4);}
if($Nivel==3){
	$Tiempo=60;
$formula=(($varTiempo[1]*100)/($Tiempo/2))-($Intentos*3);}
if($Nivel==4){
	$Tiempo=85;
$formula=(($varTiempo[1]*100)/($Tiempo/2))-($Intentos*2);}
if($Nivel==5){
	$Tiempo=120;
$formula=(($varTiempo[1]*100)/($Tiempo/2))-($Intentos*1);}
	
	$file = fopen('HallOfFame.txt',"a");
		//fwrite($file,$_POST["Nombre"]."[".$Intentos."]"."[".$Tiempo."]"."\n");
		fwrite($file, $Nombre."=>".$formula."\n");
	
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

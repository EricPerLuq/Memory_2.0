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
					$Intentos= $_GET['Errores'];
					$Tiempo=0;
				?> 
				</p>		
					<p>Pon tu nombre:</p>
					<input type="text" name="Nombre">
					<button type="submit" name="submit" ">Enviar</button>
			</form>


		</div>
	</div>

	<div class="botones">
		<form action="index.html">
			<input class="casilla" type="submit" value="Inicio"/>
		</form>
		<form action="Ranking.php">
			<input class="casilla" type="submit" value="Ranking"/>
		</form>
	</div>

	<?php
		if(isset($_POST["submit"])) {	
			$file = fopen('HallOfFame.txt',"a");
				fwrite($file,$_POST["Nombre"]."[".$Intentos."]"."[".$Tiempo."]"."\n");
				fclose($file);
		}
	?>
	
</body>
</html>

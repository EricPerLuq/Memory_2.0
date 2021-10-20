<!DOCTYPE html>
<html>
<head>
	<title>Página ganador</title>
	<script type="text/javascript" src="https://dl.dropboxusercontent.com/s/qhmfmwu7ckig9l2/fartificiales.js">
		
	</script>
</head>
<body>

<style type="text/css">

	body {
			align-content: center;
			background-image: url("./imgs/fondo-bienvenida.jpg");
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-attachment: fixed;
			width: 100%;

			display: flex;

		}
	.title {
			font-family: "arial";
			text-align: center;
			color: #FFF;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 40vh;
			letter-spacing: 1px;
			width: 500vh;
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
	.Gif
		 {	
		 	align-items: center;
				
		 }
		.Div-marco{
				font-weight: bold;
				color: #black ;
		 		position: absolute;
		 		align-items: center;
		 		top: 38%;
		 		left: 35%;
		 		border-top: 1px solid #935116;
  				border-right: 1px solid #935116;
  				border-bottom: 1px solid #935116;
 				border-left: 1px solid #935116;
 				background-color: #af601a;
 				margin-top: 10px;
 				margin-left: 10px;
 				margin-right: 10px;
 				margin-bottom: 10px;
 				padding-top: 10px;
 				padding-right: 10px;
 				padding-left: 10px;
 				padding-bottom: 10px;
 				border-top-right-radius:10px;
 				border-top-left-radius: 10px;
 				border-bottom-left-radius: 10px;
 				border-bottom-right-radius: 10px;
		 	}
		 .contadorDeIntentos{
		 	font-weight: bold;
		 	font-size: x-large;
		 	font-family: "arial";
		 	padding-left: 140px;
		 }
		 p{
		 	font-weight: bold;
		 	font-size: x-large;
		 	font-family: "arial";
		 }
</style>

<div class="title">
 <h1>¡Enhorabuena <br/>Has Ganado!</h1>
</div>
<div class="Div-marco">

	<form action="" method="POST">
		<p class="contadorDeIntentos">
		<?php 
			$Intentos= $_GET['Errores'];
			$Tiempo=0;
		?> 
		</p>		
		<div class="Gif">
			<img  src="imgs/Juego_Calamar2.gif">	
		</div>
		
			<p>Pon tu nombre:</p>
			<input type="text" name="Nombre">
			<button type="submit" name="submit" ">Enviar</button>
	</form>
</div>
<?php
if(isset($_POST["submit"])) {	
	$file = fopen('HallOfFame.txt',"a");
		fwrite($file,$_POST["Nombre"]."[".$Intentos."]"."$Tiempo"."\n");
		fclose($file);
	}

	
	
?>
	
</body>
</html>

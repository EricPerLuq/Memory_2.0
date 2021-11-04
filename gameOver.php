<!DOCTYPE html>
<html>
<head>
	<title>Game Over</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/gameOver.css">
</head>
<body>
	<audio autoplay="" src="sounds/metal_gear_game_over.mp3"></audio>
	<?php
	session_start();
	echo 	"<h2><span class='nombreSessionIniciada' >".$_SESSION["nombreUsuario"]."</span></h2>" ;
	?>
	<div class="title">
		<h1>Has Perdido...</h1>
	</div>

	<div class="Div-flex">
		<div class="Div-marco">
			<div class="Gif">
				<img  src="imgs/Juego_Calamar_gameOver.gif">	
			</div>
		</div>
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
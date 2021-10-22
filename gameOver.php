<!DOCTYPE html>
<html>
<head>
	<title>Game Over</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/gameOver.css">
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
			background-image: url(imgs/fire.gif);
    		background-size: cover;
    		color: transparent;
			-moz-background-clip: text;
			-webkit-background-clip: text;
			text-transform: uppercase;
			text-align: center;
			font-size: 120px;
			line-height: .90;
			margin: 10px 0;
		}	 
	</style>

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
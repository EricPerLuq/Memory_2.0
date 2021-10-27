<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/index.css">
	<title>Memory 2.0</title>
=======
	<title>Memory 2.0</title>
	<style type="text/css">
		body {
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
		h2, p, form {
			text-align: center;
			color: #fdfefe;
		}
		span, input {
			border: solid;
			border-color: #f4d03f;
			color: #fdfefe;
			background-image: url("./imgs/fondo-boton.jpeg");			
		}
		input {
			width: 15px;
			height: 15px;
		}
		.botonJugar {
			width: 100px;
			height: 50px;
		}
		.filaBotonJugar {
			text-align: center;
		}
		img {
			width: 180px;
			height: 270px;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.separacion{
			width: 5px;
			height: 300px;
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
>>>>>>> origin/Integracion
</head>
<body>
	<table align="center">
		<tr>
<<<<<<< HEAD
			<td rowspan="2">
				<h1 align="center"><span class="casilla">MEMORY 2.0</span></h1>
				<h2><span class="casilla">INSTRUCCIONES</span></h2>
=======
			<td rowspan="4">
				<h1 align="center"><span>MEMORY 2.0</span></h1>
				<h2><span>INSTRUCCIONES</span></h2>
>>>>>>> origin/Integracion
				<p>· Debes girar 2 cartas por cada turno.</p>
				<p>· Si las cartas son las mismas, sumas un punto y se quedan desbloqueadas.</p>
				<p>· Si las cartas no coinciden, tienes 2 segundos para memorizarlas antes de que se vuelvan a ocultar.</p>
				<p>· La partida acaba cuando has encontrado todas las parejas.</p>
				<p>· El tiempo y el número de intentos son ilimitados.</p>
			</td>
<<<<<<< HEAD
			<td rowspan="2">
=======
			<td rowspan="4">
>>>>>>> origin/Integracion
				<img class=separacion src="./imgs/whiteline.png">
			</td>
			<td>
				<img src="./imgs/CartaPortada.png">
			</td>
		</tr>
		<tr>
			<td>
<<<<<<< HEAD
				<form action="Juego.php">
			        <input class="casilla" type="submit" value="JUGAR"  onclick="Jugar()"/>
				</form>
				<a href="Ranking.php">RANKING</a>
=======
				<form action="Juego.php" method="GET">
					<input type="checkbox" id="advanced "name="advanced" value="Advanced">Advanced

			</td>
		</tr>
		<tr>
			<td>	
					<input type="radio" id="nivel1" name="level" value="1" checked>
					<label for="nivel1">Nivel 1</label>
					<input type="radio" id="nivel2" name="level" value="2">
					<label for="nivel2">Nivel 2</label>
					<input type="radio" id="nivel3" name="level" value="3">
					<label for="nivel3">Nivel 3</label>
					<input type="radio" id="nivel4" name="level" value="4">
					<label for="nivel4">Nivel 4</label>
					<input type="radio" id="nivel5" name="level" value="5">
					<label for="nivel5">Nivel 5</label>			
			</td>
		</tr>
		<tr>
			<td class="filaBotonJugar">
					<input class="botonJugar" type="submit" value="JUGAR">
				</form>

>>>>>>> origin/Integracion
			</td>
		</tr>
	</table>
</body>
</html>
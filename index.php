<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/index.css">
	<title>Memory 2.0</title>
</head>
<body>
	<table align="center">
		<tr>
			<td rowspan="2">
				<h1 align="center"><span class="casilla">MEMORY 2.0</span></h1>
				<h2><span class="casilla">INSTRUCCIONES</span></h2>
				<p>· Debes girar 2 cartas por cada turno.</p>
				<p>· Si las cartas son las mismas, sumas un punto y se quedan desbloqueadas.</p>
				<p>· Si las cartas no coinciden, tienes 2 segundos para memorizarlas antes de que se vuelvan a ocultar.</p>
				<p>· La partida acaba cuando has encontrado todas las parejas.</p>
				<p>· El tiempo y el número de intentos son ilimitados.</p>
			</td>
			<td rowspan="2">
				<img class=separacion src="./imgs/whiteline.png">
			</td>
			<td>
				<img src="./imgs/CartaPortada.png">
			</td>
		</tr>
		<tr>
			<td>
				<form action="Juego.php">
			        <input class="casilla" type="submit" value="JUGAR"  onclick="Jugar()"/>
				</form>
				<a href="Ranking.php">RANKING</a>
			</td>
		</tr>
	</table>
</body>
</html>
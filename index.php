<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/index.css">
	<title>Memory 2.0</title>
</head>
<body>
	<div align="center">
        <img src="/imgs/titulo.png">
    </div>
    <table align="center">
        <tr>
            <td rowspan="3">
                <h1><span class="casilla">INSTRUCCIONES</span></h1>
                <p>· Debes girar 2 cartas por cada turno.</p>
                <p>· Si las cartas son las mismas, sumas un punto y se quedan desbloqueadas.</p>
                <p>· Si las cartas no coinciden, tienes 2 segundos para memorizarlas antes de que se vuelvan a ocultar.</p>
                <p>· La partida acaba cuando has encontrado todas las parejas.</p>
                <p>· El tiempo y el número de intentos son ilimitados.</p>
            </td>
            <td rowspan="2">
                <img class="separacion" src="./imgs/whiteline.png">
            </td>
            <td>
                <img class="imagen" src="./imgs/CartaPortada.png">
            </td>
        </tr>

		<tr>
			<td>
				<form action="Juego.php">
					<input type="text" name="nombreUsuario" placeholder="Nombre" required/>
                    <input class="casilla" type="submit" value="JUGAR"  onclick="Jugar()"/>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>
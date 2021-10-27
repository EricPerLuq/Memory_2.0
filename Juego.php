<!DOCTYPE html>
<html>
<head>
	<title>Memory 2.0</title>
	<script type="text/javascript" src="functions.js"></script>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/juego.css">
</head>
<body onload="Cronometro()">

	<h2><span class="casilla" id="contadorDeIntentos">Intentos: 0 </span></h2> 
	<h2><span class="Crono" id="Cronometro">Tiempo: 30 </span></h2>
	<table border="black" width=400 height=400>
		<?php
			$nivel=0;
			$imagenCorrecta=false;
			$contadoresCartas=[];
			$contadorCartas=-1;
			$idCarta=0;

			foreach (glob("imgs/Cartas/*.png") as $Imagen) { 
				array_push($contadoresCartas, 0);
				$contadorCartas+=1;
			}

			while ($nivel<2) {
				echo"<tr>";
				foreach (glob("imgs/Cartas/*.png") as $Imagen) { 
					while ($imagenCorrecta==false) { 
						$rand=rand(0,$contadorCartas);
						if ($contadoresCartas[$rand]==0 or $contadoresCartas[$rand]==1) {
							$contadoresCartas[$rand]+=1;
							$imagenCorrecta=true;
						}
					}
					$idCarta+=1;
					$imagenCorrecta=false;
					echo "<td><img id=\"$idCarta\" onclick=\"girarCarta($idCarta, $rand)\" src='imgs/reverso.png'></td> ";
				}
				echo"</tr>";
				$nivel=$nivel+1;
			}
		?>
	</table>
	<div class="botones">
		<form action="index.php">
			<input class="casilla" type="submit" value="Terminar partida"/>
		</form>
	</div>

</body>
</html>
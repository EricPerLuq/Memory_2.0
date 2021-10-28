<!DOCTYPE html>
<html>
<head>
	<title>Memory 2.0</title>
	<script type="text/javascript" src="functions.js"></script>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/juego.css">
</head>
<body>
	<h2><span class="casilla" id="contadorDeIntentos">Intentos: 0 </span></h2> 
	<h2><span class="casilla" id="cronometro">Tiempo:  </span></h2>
	
	
	<table border="black" width=400 heigth=400>
<?php
$nombre=$_GET["nombreUsuario"];
$nivel=$_GET["level"];
$advanced=$_GET["advanced"];
$nombre=$_GET["nombreUsuario"];
$rows=0;
$columns=0;
$totalCartas=0;
$cartaCorrecta=false;
$contadoresCartas=[];
$contadoresCartasViudas=[];
$posicionesCartasViudas=[];
$contadorCartas=-1;
$idCarta=0;

foreach (glob("imgs/Cartas/*.png") as $Imagen) { 
	array_push($contadoresCartas, 0);
	$contadorCartas+=1;
}
switch ($nivel) {
	case '1':
		$columns=4;
		$rows=2;
		break;
	case '2':
		$columns=4;
		$rows=3;
		break;
	case '3':
		$columns=4;
		$rows=4;
		break;
	case '4':
		$columns=5;
		$rows=4;
		break;
	case '5':
		$columns=6;
		$rows=5;
		break;
	case '6':
		$columns=8;
		$rows=5;
		break;
	default:
		$columns=0;
		$row=0;
		break;
}
if (is_null($advanced)) {
	$advanced=false;
} else {
	$advanced=true;
	$columns+=1;
}


$totalCuadros=$rows*$columns;
$totalCartas=round($rows*$columns/2);

for ($i=0; $i < $totalCartas; $i++) { 
 	array_push($contadoresCartas, 0);
	$contadorCartas+=1;
 } 

if ($advanced==true) {
	for ($i=0; $i < $rows; $i++) { 
		while ($cartaCorrecta==false) {
			$idCartaViuda=rand(1,$totalCuadros);
			if (!in_array($idCartaViuda, $$posicionesCartasViudas)) {
				array_push($posicionesCartasViudas, $idCartaViuda);
				$cartaCorrecta=true;
			}
		}
		$cartaCorrecta=false;
	}
}

for ($i=0; $i < $rows; $i++) { 
	echo"<tr>\n";
	for ($j=0; $j < $columns ; $j++) { 
		$idCarta+=1;
		if ($advanced==1 && in_array($idCarta, $posicionesCartasViudas)) {
			$cartaViuda=rand($totalCartas,20);
			echo "<td><img id=\"$idCarta\" onclick=\"girarCarta($idCarta, $cartaViuda)\" src='imgs/reverso.png' height='auto' width='180' ></td> \n";
		} else {
			while ($cartaCorrecta==false) { 
				$rand=rand(0,$totalCartas-(1));
				if ($contadoresCartas[$rand]==0 or $contadoresCartas[$rand]==1) {
				   	$contadoresCartas[$rand]+=1;
				   	$cartaCorrecta=true;
				}
			}
			$cartaCorrecta=false;
			echo "<td><img id=\"$idCarta\" onclick=\"girarCarta($idCarta, $rand)\" src='imgs/reverso.png' height='auto' width='180' ></td> \n";
		}
	}
	echo"</tr>";
}

if ($advanced==1) {
	echo "<script>window.onload=pasarRows($rows);";
}
echo "window.onload=cronometro(); </script>";
echo "<INPUT TYPE=HIDDEN id='nivel' value=".$nivel.">";
echo"<INPUT TYPE=HIDDEN id='nombre' value=".$nombre.">";
		?>

	</table>
	<a class="casilla" href="index.php">Terminar partida</a>
</body>
</html>
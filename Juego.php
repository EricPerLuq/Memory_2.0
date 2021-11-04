<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Memory 2.0</title>
	<script type="text/javascript" src="functions.js?a=<?php echo time();?>"></script>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/juego.css">
</head>
<body onload="cronometro()">
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
$idCarta=0;
$cartasCasadas=[];
$usosCartasCasadas=[];
$idsCartasViudas=[];
$_SESSION["nombreUsuario"]=$nombre;
echo 	"<h2><span class='casilla' >".$_SESSION["nombreUsuario"]."</span></h2>" ;
echo 	"<h2><span class='casilla' id='sesionRank' >".$_SESSION["nombreRanking"].":".$_SESSION["puntosRanking"]."</span></h2>" ;

foreach (glob("imgs/Cartas/*.png") as $Imagen) { 
	array_push($contadoresCartas, 0);
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

// Si no es advanced, genera un array de arrays de las ID de las cartas y las veces que se han colocado
if ($advanced!=true) {
	for ($i=0; $i < $totalCartas; $i++) { 
		$infoCarta=[];
		while ($cartaCorrecta==false) {
				$idCartaCasada=rand(0,25);
				if (!in_array($idCartaCasada, $cartasCasadas)) {
					array_push($cartasCasadas, $idCartaCasada);
					array_push($infoCarta, $idCartaCasada);
					array_push($infoCarta, 0);
					$cartaCorrecta=true;
				}
		}
		$cartaCorrecta=false;
		array_push($usosCartasCasadas, $infoCarta);
	}
}
// Si es advanced, genera un array de arrays de las ID de las cartas y las veces que se han colocado
else {
	$totalCartasCasadasAdvanced=(($columns-1)*$rows)/2;
	for ($i=0; $i < $totalCartasCasadasAdvanced; $i++) { 
		$infoCarta=[];
		while ($cartaCorrecta==false) {
				$idCartaCasada=rand(0,25);
				if (!in_array($idCartaCasada, $cartasCasadas)) {
					array_push($cartasCasadas, $idCartaCasada);
					array_push($infoCarta, $idCartaCasada);
					array_push($infoCarta, 0);
					$cartaCorrecta=true;
				}
		}
		$cartaCorrecta=false;
		array_push($usosCartasCasadas, $infoCarta);
	}
}
if ($advanced==true) {
	for ($i=0; $i < $rows; $i++) { 
		while ($cartaCorrecta==false) {
			$idCartaViuda=rand(1,$totalCuadros);
			if (!in_array($idCartaViuda, $posicionesCartasViudas)) {
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
			while ($cartaCorrecta==false) {
				$cartaViuda=rand(0,25);
				if (!in_array($cartaViuda, $cartasCasadas) && !in_array($cartaViuda, $idsCartasViudas)) {
					array_push($idsCartasViudas, $cartaViuda);
					$cartaCorrecta=true;
				}
			}
			$cartaCorrecta=false;
			
			echo "<td><img id='$idCarta' onclick='girarCarta($idCarta, $cartaViuda)' src='imgs/reverso.png' height='auto' width='180' ></td> \n";
		} else {
			while ($cartaCorrecta==false) { 
				$rand=rand(1, count($usosCartasCasadas));
				$rand-=1;
				 if ($usosCartasCasadas[$rand][1]==0 || $usosCartasCasadas[$rand][1]==1) {
				   	$usosCartasCasadas[$rand][1]+=1;
				   	$cartaCorrecta=true;
				} 
			}
			$alClickar= $usosCartasCasadas[$rand][0];
			$cartaCorrecta=false;
			echo "<td><img id='$idCarta' onclick='girarCarta($idCarta, $alClickar)' src='imgs/reverso.png' height='auto' width='180' ></td>\n";
		}
	}
	echo"</tr> ";
}

echo "<INPUT TYPE=HIDDEN id='nivel' value=".$nivel.">";
echo"<INPUT TYPE=HIDDEN id='nombre' value=".$nombre.">";
?>

	</table>
	<a class="casilla" href="index.php">Terminar partida</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Memory 2.0</title>
	<script type="text/javascript" src="functions.js"></script>
		<style type="text/css">
		body {
			align-content: center;
			background-image: url("./imgs/fondo-bienvenida.jpg");
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-attachment: fixed;
					}	
		table{
			margin:auto;			

		}
		img{
			height: 10;
			width:10;
		}
		span{
			margin-right: 100px;
			margin-top:5px;
            float: right;
            border: solid;
            border-color: #f4d03f;
            color: #fdfefe;
            background-image: url("./imgs/fondo-boton.jpeg");
        } 
	</style>
</head>
<body>

	<h2><span id="contadorDeIntentos">Intentos: 0 </span></h2> 
	<table border="black" width=400 heigth=400>

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
			   	//$Imagen="imgs/Cartas/Carta"."$rand".".png";
			   	$imagenCorrecta=true;
			}
		}
		$idCarta+=1;
		$imagenCorrecta=false;
		echo "<td><img id=\"$idCarta\" onclick=\"girarCarta($idCarta, $rand)\" src='imgs/reverso.png' height='auto' width='180' ></td> ";
	}echo"</tr>";
	$nivel=$nivel+1;
	}


?>
	</table>

</body>
</html>
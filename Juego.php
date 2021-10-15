<!DOCTYPE html>
<html>
<head>
	<title>Pagina principal</title>
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
	</style>
</head>
<body>
	<table border="black" width=400 heigth=400>

<?php
$nivel=0;
$imagenCorrecta=false;
$contadoresCartas=[];
$contadorCartas=-1;
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
		$imagenCorrecta=false;
		echo "<td id=$rand><img src='imgs/reverso.png' height='100' width='100' ></td> ";
	}echo"</tr>";
	$nivel=$nivel+1;
	}

?>
	</table>

</body>
</html>
var contGiradas=0;
var idPrimeraCarta="";
var primeraCarta="";
var cartaActual="";
var contIntentos=0;
var srcTemp="";
var contErrores=0;

//Gira la carta que se pulsa
function girarCarta(idcarta, anverso) {
	if (contGiradas==0) {
		idPrimeraCarta=idcarta;
	}
	cartaActual=document.getElementById(idcarta);
	srcTemp=cartaActual.src.split("/");
	srcTemp=srcTemp[srcTemp.length-1];
	srcTemp=srcTemp.split(".");
	srcTemp=srcTemp[0];
	if (srcTemp==="reverso" && contGiradas<2) {
		cartaActual.src = "./imgs/Cartas/carta" + anverso + ".png";
		contGiradas+=1;
		if (contGiradas==1) {
			primeraCarta=cartaActual;
		} else {
			compararCartas(primeraCarta, cartaActual);
		}
	} else {
		console.log("Ya hay dos cartas giradas o la carta ya está girada");
	}
}

//Compara que las cartas sean iguales
function compararCartas(primeraCartaComparar, segundaCartaComparar){
	segundaCarta=cartaActual;
	contIntentos++;
	document.getElementById("contadorDeIntentos").innerHTML = "Intentos: " + contIntentos;
	if (primeraCartaComparar.src!=segundaCartaComparar.src) {
		setTimeout(esperando, 2000);
		console.log("No son iguales");
	} else {
		console.log("Son iguales!");
		contGiradas=0;
		comprobarGanador();
	}
}

<<<<<<< HEAD
//Con esta funcion inicamos el juego
function Jugar(){
	window.location.href = "Juego.php";
}
//Con esta funcion iniciamos el cronometro
function Cronometro(){
	console.log("Ha entrado");
	var control=30;
	var SpanNumero=document.getElementById("Cronometro");
	window.setInterval(function(){
		if (control==0) {
		window.location.href="gameOver.php";

		}
		SpanNumero.innerHTML = "Tiempo: "+control;
		control-=1;},1000);

}
<<<<<<< HEAD
=======
/*Con esta funcion inicamos el juego
function Jugar(nivel){
	window.location.href = "Juego.php?nivel=" + nivel;
}*/
>>>>>>> origin/Integracion
=======
>>>>>>> fdee67cacd07fced9daec91d2c9ff8ae757b2a18

//Esperar 2 segundos para ocultar las cartas
function esperando(){
	primeraCarta.src="imgs/reverso.png";
	segundaCarta.src="imgs/reverso.png";
	contGiradas=0;
}

//Repasa todas las cartas y comprueba si tienen reverso
function comprobarGanador() {
    var todasCartas = document.getElementsByTagName("img");
    var ganador=true;
    for (i=0; i<todasCartas.length; i++) {
    	srcTemp2=todasCartas[i].src.split("/");
		srcTemp2=srcTemp2[srcTemp2.length-1];
        if (srcTemp2=="reverso.png") {
            ganador=false;
        }
    }
    if (ganador===true) {
    	contErrores = contIntentos - (todasCartas.length/2);
    	window.location.href = "Ganar.php?Errores=" + contErrores;
    }
}

function cartaViuda(cartaNueva, totalCuadros) {
	cartaACambiar=Math.floor(Math.random() * totalCuadros);
	console.log("Carta a Cambiar: " + cartaACambiar);
	console.log("Cambiar por la carta: " + cartaNueva);
	console.log("Antes: " + document.getElementById(cartaACambiar).onclick);
	document.getElementById(cartaACambiar).setAttribute('onclick', "girarCarta(" + cartaACambiar + ", "+ cartaNueva + ")");
	console.log("Después: " + document.getElementById(cartaACambiar).onclick);
}
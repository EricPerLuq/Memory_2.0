var contGiradas=0;
var idPrimeraCarta="";
var primeraCarta="";
var cartaActual="";
var contIntentos=0;
var srcTemp="";


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
		console.log("Ya hay dos giradas");
	}
}

function compararCartas(primeraCartaComparar, segundaCartaComparar){
	segundaCarta=cartaActual;
	if (primeraCartaComparar.src!=segundaCartaComparar.src) {
		setTimeout(esperando, 2000);
		console.log("No son iguales");
	} else {
		console.log("Son iguales!");
		contGiradas=0;
		comprobarGanador();
		//contadorGanador = document.getElementById("contador"); //posiblemente le falte un metodo para el contenido del p
		//document.getElementById("contador").innerText = contadorGanador+1; //dudosa eficacia
	}

	contIntentos++;
	document.getElementById("contadorDeIntentos").innerHTML = "Intentos: " + contIntentos; 
}

//Con esta funcion inicamos el juego
function Jugar(){
	window.location.href = "Juego.php";
}

function esperando(){
	primeraCarta.src="imgs/reverso.png";
	segundaCarta.src="imgs/reverso.png";
	contGiradas=0;
}

//repasa todas las cartas y comprueba si tienen reverso
function comprobarGanador() {
    var todasCartas = document.getElementsByTagName("img");
    var ganador=true;
    for (i=0; i<todasCartas.length; i++) {
    	srcTemp2=todasCartas[i].src.split("/");
		srcTemp2=srcTemp2[srcTemp2.length-1];
		console.log(srcTemp2);
        if (srcTemp2=="reverso.png") {
            ganador=false;
        }
    }
    if (ganador===true) {
    	//pantalla ganador
    }
}
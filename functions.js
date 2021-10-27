var contGiradas=0;
var idPrimeraCarta="";
var primeraCarta="";
var cartaActual="";
var contIntentos=0;
var srcTemp="";
var contErrores=0;
var viudasGiradas=0;
var maxViudasGiradas=0;

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

// Gira las cartas viudas
function girarCartaViuda(idcarta) {
	cartaActual=document.getElementById(idcarta);
	srcTemp=cartaActual.src.split("/");
	srcTemp=srcTemp[srcTemp.length-1];
	srcTemp=srcTemp.split(".");
	srcTemp=srcTemp[0];
	if (srcTemp==="reverso" && viudasGiradas<maxViudasGiradas) {
		cartaActual.src = "./imgs/Cartas/cartaMarcada.png";
		cartaActual.style.border = "1px solid red";
		viudasGiradas+=1;
	} else if (srcTemp!="reverso") {
		cartaActual.src= "./imgs/reverso.png";
		cartaActual.style.border="0px";
		viudasGiradas-=1;
	}
	console.log("Viudas giradas: " + viudasGiradas);
	console.log("Max viudas: " + maxViudasGiradas);

	comprobarGanador();
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
    var comprobarGiradas=0;
    for (i=0; i<todasCartas.length; i++) {
    	srcTemp2=todasCartas[i].src.split("/");
		srcTemp2=srcTemp2[srcTemp2.length-1];
        if (srcTemp2=="reverso.png") {
            ganador=false;
        }
        if (srcTemp2=="cartaMarcada.png") {
        	comprobarGiradas+=1;
        }
        if (comprobarGiradas===maxViudasGiradas) {
        	viudasGiradas=maxViudasGiradas;
        }
    }
    if (ganador===true) {
    	contErrores = contIntentos - (todasCartas.length/2);
    	window.location.href = "Ganar.php?Errores=" + contErrores;
    }
}

// Genera cartas viudas
/*function cartaViuda(cartaNueva, totalCuadros) {
	cartaACambiar=Math.floor(Math.random() * totalCuadros);
	console.log("Carta a Cambiar: " + cartaACambiar);
	console.log("Cambiar por la carta: " + cartaNueva);
	console.log("Antes: " + document.getElementById(cartaACambiar).onclick);
	document.getElementById(cartaACambiar).setAttribute('onclick', "girarCarta(" + cartaACambiar + ", "+ cartaNueva + ")");
	console.log("Después: " + document.getElementById(cartaACambiar).onclick);
}*/

// Detecta y reacciona a los clicks derechos
document.oncontextmenu = function(e) {
	if (viudasGiradas<=maxViudasGiradas) {
		onclickParameters=e.target.getAttribute("onclick");
		onclickParameters=onclickParameters.split("(");
		onclickParameters=onclickParameters[1].split(",");
		onclickIdCarta=onclickParameters[0];
		girarCartaViuda(onclickIdCarta);
	}
	return false;
};

// Adjudica el máximo de cartas que puedes girar (viudas)
function pasarRows(rows) {
	maxViudasGiradas = rows;
	console.log("Número de viudas: " + maxViudasGiradas);
}
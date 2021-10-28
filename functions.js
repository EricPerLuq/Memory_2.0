var contGiradas=0;
var idPrimeraCarta="";
var primeraCarta="";
var cartaActual="";
var contIntentos=0;
var srcTemp="";
var contErrores=0;

/*document.getElementById(idcarta).oncontextmenu = function (e) {
							var isRightMB;
							console.log(e);
							console.log(window.event);
							e = e || window.event;

							if("which" in e) {
								isRightMB=e.which == 3;
							}
							else if ("button" in e) {
								isRightMB = e.button==2;
							}
							alert("Right mouse button " + (isRightMB ? "" : " was not")+ "clicked!");
						}*/


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
    var TiempoRes=document.getElementById("Cronometro").textContent;
    var Nombre=document.getElementById("nombre").value;
    var lvl=document.getElementById("nivel").value;
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
    	window.location.href = "Ganar.php?Errores=" + contErrores + "&lvl=" + lvl + "&Tiempo=" +TiempoRes+"&Nombre="+Nombre;
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

//Con esta funcion iniciamos el cronometro
function Cronometro(){
	var Tiempo=0;
	var Nivel=document.getElementById("nivel").value;
	console.log(Nivel);
	if (Nivel==1) {
		Tiempo=30;
		ArrancaCrono(Tiempo);}
	else if (Nivel==2) {
		Tiempo=45;
		ArrancaCrono(Tiempo);
		console.log(Tiempo);
	}else if (Nivel==3) {
		Tiempo=60;
		ArrancaCrono(Tiempo);
	}else if (Nivel==4) {
		Tiempo=85;
		ArrancaCrono(Tiempo);
	}else if (Nivel==5) {
		Tiempo=120;
		ArrancaCrono(Tiempo);
	}
}
function ArrancaCrono(Tiempo){
	var SpanNumero=document.getElementById("Cronometro");
	window.setInterval(function(){
		if (Tiempo==0){
		window.location.href="gameOver.php";
		}
		SpanNumero.innerHTML = "Tiempo: "+Tiempo;
		Tiempo-=1;},1000);}

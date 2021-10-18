var contGiradas=0;
var idPrimeraCarta="";
var primeraCarta="";
var cartaActual="";
var srcTemp="";

function girarCarta(idcarta, anverso) {
	if (contGiradas==0) {
		idPrimeraCarta=idcarta;
		console.log(idPrimeraCarta);
	}
	cartaActual=document.getElementById(idcarta);
	srcTemp=cartaActual.src.split("/");
	srcTemp=srcTemp[srcTemp.length-1];
	srcTemp=srcTemp.split(".");
	srcTemp=srcTemp[0];
	console.log("contGiradas: " + contGiradas);
	if (srcTemp==="reverso" && contGiradas<2) {
		cartaActual.src = "./imgs/Cartas/carta" + anverso + ".png";
		contGiradas+=1;
		if (contGiradas==1) {
			primeraCarta=cartaActual;
			console.log("primera " + primeraCarta.src);
			console.log("actual " + cartaActual.src);
		} else {
			console.log("else");
			console.log("primera " + primeraCarta.src);
			console.log("actual " + cartaActual.src);
			compararCartas(primeraCarta, cartaActual);
		}
	} else {
		console.log(contGiradas + srcTemp);
		console.log("Ya hay dos giradas");
	}
}

function compararCartas(primeraCartaComparar, segundaCartaComparar){
	console.log(primeraCartaComparar.src);
	console.log(segundaCartaComparar.src);
	segundaCarta=cartaActual;
	if (primeraCartaComparar.src!=segundaCartaComparar.src) {
		setTimeout(esperando, 2000);
		console.log("No son iguales");
	} else {
		console.log("Son iguales!");
		contGiradas=0;
		//contadorGanador = document.getElementById("contador"); //posiblemente le falte un metodo para el contenido del p
		//document.getElementById("contador").innerText = contadorGanador+1; //dudosa eficacia
	}
}

//Con esta funcion inicamos el juego
function Jugar(){
	window.location.href = "Juego.php";
}

function esperando(){
	console.log("esperando me hallo");
	primeraCarta.src="imgs/reverso.png";
	segundaCarta.src="imgs/reverso.png";
	contGiradas=0;
}
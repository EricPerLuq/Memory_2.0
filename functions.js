var contGiradas=0;
var idPrimeraCarta="";
var primeraCarta="";
var cartaActual="";

girarCarta(idcarta, anverso, contGiradas) {
	if (contGiradas==0) {
		idPrimeraCarta=idcarta;
	} else {
		primeraCarta=document.getElementById(idPrimeraCarta).src
	}

	cartaActual=document.getElementById(idcarta).src;
	console.log(cartaActual);
	console.log(cartaActual[-11,-1]==="reverso.png");
	if (!cartaActual[-11,-1]==="reverso.png" && contGiradas<2) {
		cartaActual = "./imgs/" + anverso + ".png";
		contGiradas+=1;
		if (contGiradas==1) {
			primeraCarta=cartaActual;
		} else {
			comprarCartas(primeraCarta);
		}
	}
}

comprarCartas(primeraCarta){
	if (primeraCarta!=cartaActual) {
		primeraCarta="./imgs/revers.png";
		cartaActual="./imgs/revers.png";
	} else {
		//contadorGanador = document.getElementById("contador"); //posiblemente le falte un metodo para el contenido del p
		//document.getElementById("contador").innerText = contadorGanador+1; //dudosa eficacia
	}
}
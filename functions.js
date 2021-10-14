girarCarta(idcarta, anverso, contGiradas) {
	carta=document.getElementById(idcarta).src;
	console.log(carta[-11,-1]==="reverso.png");
	if (!carta[-11,-1]==="reverso.png" && contGiradas<2) {
		carta = "./imgs/" + anverso + ".png";
	} 
}
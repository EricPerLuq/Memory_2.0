girarCarta(idcarta, anverso) {
	carta=document.getElementById(idcarta).src;
	console.log(carta[-11,-1]==="reverso.png");
	if (!carta[-11,-1]==="reverso.png") {
		carta = "./imgs/" + anverso + ".png";
	} 
}
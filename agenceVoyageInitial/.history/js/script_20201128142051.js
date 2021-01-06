// Je récupère le hamburger
var hamburger = document.getElementById('hamburger');
// Je cible la DIV à afficher
var menuResp = document.getElementById('menuResponsive');
console.log(menuResp)
// J'ajoute un listener + une action
hamburger.addEventListener('click', function(){
	if (menuResp.style.display == 'block'){
	menuResp.style.display = 'none';
	}else{
	menuResp.style.display = 'block';
	}
})


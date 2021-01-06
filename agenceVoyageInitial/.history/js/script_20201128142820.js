console.log('test')
// Je récupère le hamburger
var hamburger = document.getElementById('hamburger');
console.log(hamburger, "ham")
// Je cible la DIV à afficher
var menuMobile = document.getElementById('menuMobile');
console.log(menuResp)

// J'ajoute un listener + une action
hamburger.addEventListener('click', function(){
	if (menuMobile.style.display == 'block'){
	menuResp.style.display = 'none';
	}else{
	menuResp.style.display = 'block';
	}
})


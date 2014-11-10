function redimensionnePage(){
    var contenu = document.getElementById('contenu');
    var corps = document.body;

    /*Hauteur des éléments*/

    var contenuHauteur = contenu.offsetHeight;
    var corpsHauteur = corps.offsetHeight;
    var corpsDisponible = corpsHauteur - 2*50 -20;

    /*Attribution des valeurs des marges*/

    if (contenuHauteur <= corpsDisponible) {
        var marge = (corpsDisponible - contenuHauteur)/2;
        contenu.style.marginTop = marge+'px';
        contenu.style.marginBottom = marge+'px';
    }
    else{
        contenu.style.marginTop = 10+'px';
        contenu.style.marginBottom = 0+'px';
    }
}

window.onload = redimensionnePage;
window.onresize = redimensionnePage;

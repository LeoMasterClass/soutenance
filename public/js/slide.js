/*
 * 1 - Stocker la balise wrapper (variable ou constante ?)/
 * 2 - Afficher Hello world dans la balise wrapper/
 * 3 - Stocker la liste des images (variable ou constante ? / tableau ?)/
 * 4 - Remplacer Hello world par la première image de la liste/
 * 5 - Stocker les flèches (variable ou constante ?)/
 * 6 - Au clic, sur une flèche, afficher un message d'alert précisant la direction/
 * 7 - Stocker une valeur de position qui nous serviera à appeler dynamiquement l'image attendu i.e : slides[position]/
 * 8 - Gestion du clic droit :
 *     .1 - Incrémenter la position
 *     .2 - Changer l'image en fonction de la position
 *     .3 - algorithme qui repasse la position à 0 si on dépasse l'index de la dernière image
 * 9 - Même chose pour le clic gauche
 * 10 - Externaliser la gestion de la position dans une fonction "changePosition(direction)"
 * 11 - Refacto
 */

// /!\ Attention, il faut que je puisse rajouter une image à mon tableau sans avoir à toucher à la logique de mon code !

const wrapper = document.getElementById("wrapper");
const imgslide = ["octoberfest2.jpeg", "slider2.jpg", "slider3.jpg", "slider4.jpg",];
const prev = document.getElementById("left-arrow");
const next = document.getElementById("right-arrow");

let i = 0;
wrapper.innerHTML = "<img src='public/img/" + imgslide[i] + "' />";

prev.addEventListener('click', function () {

    if (i === 0) {
        i = 2;
    } else {
        i--;
    }


    wrapper.innerHTML = "<img src='public/img/" + imgslide[i] + "' />";
})
next.addEventListener('click', function () {

    if (i === 2) {
        i = 0;
    } else {
        i++;
    }


    wrapper.innerHTML = "<img src='public/img/" + imgslide[i] + "' />";
})
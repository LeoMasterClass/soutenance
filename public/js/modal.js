//regex modal
var formValidmodal = document.getElementById('envoi_modal');
//Mail
var mailmodal = document.getElementById('InputEmail1');
var mailErrormodal = document.getElementById('mailErrormodal');
var mailValidmodal = /^[a-zA-Z-0-9]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$/;


formValidmodal.addEventListener('click', validationmodalMail);

function validationmodalMail(event) {
        if (mailmodal.validity.valueMissing) {
                event.preventDefault();
                mailErrormodal.textContent = 'Mail manquant';
                mailErrormodal.style.color = 'orange';
        } else if (mailValidmodal.test(mailmodal.value) == false) {
                event.preventDefault();
                mailErrormodal.textContent = 'Format incorrect';
                mailErrormodal.style.color = 'red';

        } else {
                mailErrormodal.textContent = '✔';
                mailErrormodal.style.color = 'green';
        }
}
//mot de passe modal
var mdp = document.getElementById('InputPassword1');
var mdpError = document.getElementById('mdpError');
var regexMdp = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

formValidmodal.addEventListener('click', validMdp);

function validMdp(event) {
        if (mdp.validity.valueMissing) {
                event.preventDefault();
                mdpError.textContent = 'Mot de passe manquant';
                mdpError.style.color = 'orange';
        } else if (regexMdp.test(mdp.value) == false) {
                event.preventDefault();
                mdpError.textContent = 'Format incorrect';
                mdpError.style.color = 'red';
        } else {
                mdpError.textContent = '✔';
                mdpError.style.color = 'green';
        }
}

//Modal Inscription
//nom
var nominscription = document.getElementById('InputNomInscription');
var missnominscription = document.getElementById('missnom2');
var nomValidinscription = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;

var formValidInscription = document.getElementById('envoi_inscription');

formValidInscription.addEventListener('click', NomInscription);

function NomInscription(event) {
        //Si le champ est vide
        if (nominscription.validity.valueMissing) {
                event.preventDefault();
                missnominscription.textContent = 'Nom manquant';
                missnominscription.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (nomValidinscription.test(nominscription.value) == false) {
                event.preventDefault();
                missnominscription.textContent = 'Format incorrect';
                missnominscription.style.color = 'red';

        } else {
                missnominscription.textContent = '✔';
                missnominscription.style.color = 'green';
        }
}
// Prenom
var prenom1 = document.getElementById('InputPrenomInscription');
var missPrenom1 = document.getElementById('missPrenom1');
var prenomValid1 = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;


formValidInscription.addEventListener('click', validationPrenom1);

function validationPrenom1(event) {
        //Si le champ est vide
        if (prenom1.validity.valueMissing) {
                event.preventDefault();
                missPrenom1.textContent = 'Prénom manquant';
                missPrenom1.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (prenomValid1.test(prenom1.value) == false) {
                event.preventDefault();
                missPrenom1.textContent = 'Format incorrect';
                missPrenom1.style.color = 'red';

        } else {
                missPrenom1.textContent = '✔';
                missPrenom1.style.color = 'green';
        }
}
//Mail
var mailmodal1 = document.getElementById('InputEmailInscription');
var mailErrormodal1 = document.getElementById('mailErrormodal1');
var mailValidmodal1 = /^[a-zA-Z-0-9]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$/;


formValidInscription.addEventListener('click', validationmodalMail1);

function validationmodalMail1(event) {
        if (mailmodal1.validity.valueMissing) {
                event.preventDefault();
                mailErrormodal1.textContent = 'Mail manquant';
                mailErrormodal1.style.color = 'orange';
        } else if (mailValidmodal1.test(mailmodal1.value) == false) {
                event.preventDefault();
                mailErrormodal1.textContent = 'Format incorrect';
                mailErrormodal1.style.color = 'red';

        } else {
                mailErrormodal1.textContent = '✔';
                mailErrormodal1.style.color = 'green';
        }
}
//mot de passe modal
var mdp1 = document.getElementById('InputPasswordInscription');
var mdpError1 = document.getElementById('mdpError1');
var regexMdp1 = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

formValidInscription.addEventListener('click', validMdp1);

function validMdp1(event) {
        if (mdp1.validity.valueMissing) {
                event.preventDefault();
                mdpError1.textContent = 'Mot de passe manquant';
                mdpError1.style.color = 'orange';
        } else if (regexMdp1.test(mdp1.value) == false) {
                event.preventDefault();
                mdpError1.textContent = 'Format incorrect';
                mdpError1.style.color = 'red';
        } else {
                mdpError1.textContent = '✔';
                mdpError1.style.color = 'green';
        }
}
//mot de passe repeat modal
var mdp2 = document.getElementById('InputRepeatPasswordInscription');
var mdpError2 = document.getElementById('mdpError2');
var regexMdp2 = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

formValidInscription.addEventListener('click', validMdp2);

function validMdp2(event) {
        if (mdp2.validity.valueMissing) {
                event.preventDefault();
                mdpError2.textContent = 'Mot de passe manquant';
                mdpError2.style.color = 'orange';
        } else if (regexMdp2.test(mdp2.value) == false) {
                event.preventDefault();
                mdpError2.textContent = 'Format incorrect';
                mdpError2.style.color = 'red';
        } else {
                mdpError2.textContent = '✔';
                mdpError2.style.color = 'green';
        }
}
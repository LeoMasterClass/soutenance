//Nom
var name = document.getElementById('InputNom1');
var missName = document.getElementById('missnom');
var nameValid = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;
// Pour valider
var formValid = document.getElementById('bouton_envoi');

formValid.addEventListener('click', validation);

function validation(event) {
        //Si le champ est vide
        if (name.validity.valueMissing) {
                event.preventDefault();
                missName.textContent = 'Nom manquant';
                missName.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (nameValid.test(name.value) == false) {
                event.preventDefault();
                missName.textContent = 'Format incorrect';
                missName.style.color = 'purple';

        } else {
                missName.textContent = '✔';
                missName.style.color = 'green';
        }
}
// Prenom
var fullName = document.getElementById('InputPrenom1');
var missFullName = document.getElementById('missPrenom');
var fullNameValid = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;


formValid.addEventListener('click', validationFullName);

function validationFullName(event) {
        //Si le champ est vide
        if (fullName.validity.valueMissing) {
                event.preventDefault();
                missFullName.textContent = 'Prénom manquant';
                missFullName.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (fullNameValid.test(fullName.value) == false) {
                event.preventDefault();
                missFullName.textContent = 'Format incorrect';
                missFullName.style.color = 'purple';

        } else {
                missFullName.textContent = '✔';
                missFullName.style.color = 'green';
        }
}
//Mail
var mail = document.getElementById('InputEmail2');
var mailError = document.getElementById('mailError');
var mailValid = /^[a-zA-Z-0-9]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$/;


formValid.addEventListener('click', validationMail);

function validationMail(event) {
        if (mail.validity.valueMissing) {
                event.preventDefault();
                mailError.textContent = 'Mail manquant';
                mailError.style.color = 'orange';
        } else if (mailValid.test(mail.value) == false) {
                event.preventDefault();
                mailError.textContent = 'Format incorrect';
                mailError.style.color = 'purple';

        } else {
                mailError.textContent = '✔';
                mailError.style.color = 'green';
        }
}
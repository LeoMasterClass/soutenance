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
var password = document.getElementById('InputPassword1');
var passwordError = document.getElementById('mdpError');
var regexPassword = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

formValidmodal.addEventListener('click', validPassword);

function validPassword(event) {
        if (password.validity.valueMissing) {
                event.preventDefault();
                passwordError.textContent = 'Mot de passe manquant';
                passwordError.style.color = 'orange';
        } else if (regexPassword.test(password.value) == false) {
                event.preventDefault();
                passwordError.textContent = 'Format incorrect';
                passwordError.style.color = 'red';
        } else {
                passwordError.textContent = '✔';
                passwordError.style.color = 'green';
        }
}

//Modal Inscription
//nom
var nameSign = document.getElementById('InputNomInscription');
var missNameSign = document.getElementById('missnom2');
var nameValidSign = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;

var formValidSign = document.getElementById('envoi_inscription');

formValidSign.addEventListener('click', nameSign);

function nameSign(event) {
        //Si le champ est vide
        if (nameSign.validity.valueMissing) {
                event.preventDefault();
                missNameSign.textContent = 'Nom manquant';
                missNameSign.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (nameValidSign.test(nameSign.value) == false) {
                event.preventDefault();
                missNameSign.textContent = 'Format incorrect';
                missNameSign.style.color = 'red';

        } else {
                missNameSign.textContent = '✔';
                missNameSign.style.color = 'green';
        }
}
// Prenom
var fullName1 = document.getElementById('InputPrenomInscription');
var missFullName1 = document.getElementById('missPrenom1');
var fullNameValid1 = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;


formValidSign.addEventListener('click', validationFullName1);

function validationFullName1(event) {
        //Si le champ est vide
        if (fullName1.validity.valueMissing) {
                event.preventDefault();
                missFullName1.textContent = 'Prénom manquant';
                missFullName1.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (fullNameValid1.test(fullName1.value) == false) {
                event.preventDefault();
                missFullName1.textContent = 'Format incorrect';
                missFullName1.style.color = 'red';

        } else {
                missFullName1.textContent = '✔';
                missFullName1.style.color = 'green';
        }
}
//Mail
var mailmodal1 = document.getElementById('InputEmailInscription');
var mailErrormodal1 = document.getElementById('mailErrormodal1');
var mailValidmodal1 = /^[a-zA-Z-0-9]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$/;


formValidSign.addEventListener('click', validationmodalMail1);

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
var password1 = document.getElementById('InputPasswordInscription');
var passwordError1 = document.getElementById('mdpError1');
var regexPassword1 = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

formValidSign.addEventListener('click', validPassword1);

function validPassword1(event) {
        if (password1.validity.valueMissing) {
                event.preventDefault();
                passwordError1.textContent = 'Mot de passe manquant';
                passwordError1.style.color = 'orange';
        } else if (regexPassword1.test(password1.value) == false) {
                event.preventDefault();
                passwordError1.textContent = 'Format incorrect';
                passwordError1.style.color = 'red';
        } else {
                passwordError1.textContent = '✔';
                passwordError1.style.color = 'green';
        }
}
//mot de passe repeat modal
var password2 = document.getElementById('InputRepeatPasswordInscription');
var passwordError2 = document.getElementById('mdpError2');
var regexPassword2 = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

formValidSign.addEventListener('click', validPassword2);

function validPassword2(event) {
        if (password2.validity.valueMissing) {
                event.preventDefault();
                passwordError2.textContent = 'Mot de passe manquant';
                passwordError2.style.color = 'orange';
        } else if (regexPassword2.test(password2.value) == false) {
                event.preventDefault();
                passwordError2.textContent = 'Format incorrect';
                passwordError2.style.color = 'red';
        } else {
                passwordError2.textContent = '✔';
                passwordError2.style.color = 'green';
        }
}
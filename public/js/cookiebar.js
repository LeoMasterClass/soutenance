//barre de cookie
let button = document.getElementById("bouton");
let non = document.getElementById("non");
//politique d'utilisation
non.addEventListener('click', redirection);
button.addEventListener('click', hideCookiebar);

function redirection() {
    document.location.href = "https://www.google.com";
}

function hideCookiebar() {
    document.getElementById('cookie-bar').style.display = 'none';
}
localStorage.setItem("document.getElementById('oui')");
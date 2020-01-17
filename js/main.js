//----------------slider
const wrapper = document.getElementById("wrapper");
const slides = ["slider1.jpg","slider2.jpg","slider3.jpg"];
const left = document.getElementById("left-arrow");
const right = document.getElementById("right-arrow");

let position = 0;
wrapper.innerHTML= "<img src='images/slider/"+slides[position]+"'/>";

right.addEventListener("click" , function(){

    if(position == 2){
        position = 0;
    }else{
        position++;
    }
    wrapper.innerHTML= "<img src='images/slider/"+slides[position]+"'/>";

});
left.addEventListener("click" , function(){

    if(position == 0){
        position = 2;
    }else{
        position--;
    }
    wrapper.innerHTML= "<img src='images/slider/"+slides[position]+"'/>";

});


//barre de cookie
let button =document.getElementById("bouton");
let non= document.getElementById("non")
let cookie= document.getElementById("cookie-bar")
//politique d'utilisation
non.addEventListener('click', redirection)
button.addEventListener('click', hideCookiebar);

function redirection() {

    document.location.href="https://www.google.com";

}

function hideCookiebar() {
        
        document.getElementById('cookie-bar').style.display = 'none';

}


function linksActive(indexActive) {
    let links = document.getElementsByClassName('nav-link');
    links[indexActive].className +=" active";
}
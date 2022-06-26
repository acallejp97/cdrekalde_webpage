require('./bootstrap');
require('./jquery.min');
require('./owl.carousel.min');

var loader = document.querySelector(".loader")

window.addEventListener("load", vanish);

function vanish() {
    loader.classList.add("disppear");
}

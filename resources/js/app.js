require('./bootstrap');
require('./jquery.min');
require('./owl.carousel.min');

var loader = document.querySelector(".loader")

window.addEventListener("load", vanish);

function vanish() {
    loader.classList.add("disppear");
}

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        center: true,
        items: 1,
        responsive: {
            1700: {
                items: 4
            },

            992: {
                items: 2
            }
        },
        margin: 20,
        lazyLoad: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots: false
    });
});

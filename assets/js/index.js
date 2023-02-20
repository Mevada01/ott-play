$(document).ready(function () {
    $('#homeslider').owlCarousel({
        loop: true,
        nav: true,
        margin: 10,
        autoplay: true,
        animateIn: 'linear',
        animateOut: 'linear',
        autoplayTimeout: 5000,
        smartSpeed: 3000,
        items: 1.2,
        center: true,
        autoplayHoverPause: true,
        navText: [
            '<svg fill="#fff" viewBox="-128 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#fff" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></g></svg>',
            '<svg fill="#fff" viewBox="-128 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#fff" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></g></svg>'],
        responsive: {
            // breakpoint from 0 up
            0: {
                center: false,
                items: 1
            },
            1200: {
                center: true,
                items: 1.3
            }
        }
    })
});
$(document).ready(function () {
    $('.trendings').owlCarousel({
        loop: true,
        nav: true,
        margin: 20,
        autoplay: true,
        // animateIn: 'linear',
        // animateOut: 'linear',
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        items: 6.2,
        autoplayHoverPause: true,
        responsiveClass:true,
        navText: [
            '<svg fill="#fff" viewBox="-128 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#fff" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></g></svg>',
            '<svg fill="#fff" viewBox="-128 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#fff" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></g></svg>'],
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 3.2
            },
            900:{
                items:5.2
            },
            1200: {
                items: 6.2
            },  
            1550:{
                items: 8.2,
                nav:false
            },
        }
    })
});
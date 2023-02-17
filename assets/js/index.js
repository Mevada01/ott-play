$(document).ready(function () {
    $('#homeslider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items:1.2,
        center: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                center: false,
                items: 1
            },
            1200: {
                center: true,
                items: 1.2
            }
        }
    })
});
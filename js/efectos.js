$(document).ready(function() {

    // Scroll elementos menú
    var windowWidth = $(window).width(); // obtenemos el ancho de la ventana

    if (windowWidth >= 800) {

        // Enlace about me
        $('#btn-acerca-de').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 450
            }, 500);
        });

        // Enlace portfolio
        $('#btn-portafolio').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 1080
            }, 500);
        });

        // Enlace contact
        $('#btn-contacto').on('click', function(e) {
            $('html, body').animate({
                scrollTop: 1900
            }, 500);
        });

    }

    windowWidth = $(window).width(); // obtenemos nuevamente el ancho de la ventana

    if (windowWidth < 800) {

        // Enlace about me
        $('#btn-acerca-de').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 700
            }, 500);
        });

        // Enlace portfolio
        $('#btn-portafolio').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 1200
            }, 500);
        });

        // Enlace contact
        $('#btn-contacto').on('click', function(e) {
            $('html, body').animate({
                scrollTop: 2400
            }, 500);
        });

    }

});
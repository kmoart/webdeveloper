$(document).ready(function() {

    //Efecto menú
    $('.menu a').each(function(index, elemento) {
        $(this).css({
            top: '-200px'
        });

        $(this).animate({
            top: '0'
        }, 2000 + (index * 500)); // Queremos que el elemento actual tenga una animación que 
        //tarde dos segundos (2000) más el índice del enlace por 500, de modo que en cada enlace
        // la animación se activa en diferentes tiempos y en orden del menor enlace al mayor .
    });

    //Efecto Header
    if ($(window).width() > 800) { // Si el tamaño de la ventana es mayor a 800px, ejecutar el código
        $('header .textos').css({
            opacity: 0, //para que el texto cargue oculto
            marginTop: 0 //Margen hacia arriba de cero. El margen inicial es de -52px.
        });

        $('header .textos').animate({
            opacity: 1, //para que el texto cargue oculto
            marginTop: '-52px' //Margen hacia arriba de cero. 
        }, 1500); // agregamos segundo y medio para que tarde la animación y no se vea tan rápido el cambio.
    }

    // Scroll elementos menú
    var acercaDe = $('#acerca-de').offset().top, //con ésta función estamos calculando la posicion en
        // pantalla donde encuentra el div con id 'acerca-de'.
        menu = $('#platillos').offset().top;
    var windowWidth = $(window).width(); //obtenemos el ancho de la ventana

    if (windowWidth >= 800) {

        $('#btn-acerca-de').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 660 // se puede reemplazar el valor de 660 por el de la variaable acercaDe.
            }, 500);
        });

        $('#btn-menu').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 1285
            }, 500);
        });

        $('#btn-galeria').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 2210
            }, 500);
        });

        $('#btn-ubicacion').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 3260
            }, 500);
        });

    }

    var windowWidth = $(window).width(); //obtenemos el ancho de la ventana

    if (windowWidth < 800) { // El valor de 800 debe ser igual al valor del media query en css
        $('#btn-acerca-de').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 690 // se puede reemplazar el valor de 660 por el de la variaable acercaDe.
            }, 500);
        });

        $('#btn-menu').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 1070
            }, 500);
        });

        $('#btn-galeria').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 2660
            }, 500);
        });

        $('#btn-ubicacion').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 4980
            }, 500);
        });
    }

});
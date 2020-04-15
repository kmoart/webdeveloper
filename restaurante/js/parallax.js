$(document).ready(function() {

    $(window).scroll(function() { //scroll es el nombre del evento
        var windowWidth = $(window).width(); //obtenemos el ancho de la ventana

        if (windowWidth > 800) { // El valor de 800 debe ser igual al valor del media query en css
            var scroll = $(window).scrollTop(); //scrollTop() es el nombre de la funciòn que devuelve el valor de la posicion donde se encuentre la barra vertical de la página web.

            //Como primer punto animaremos los textos
            // se trasladan el div textos del header verticalmente.
            // se concatena una cadena de texto con el valor scroll y el procentaje.
            $('header .textos').css({
                'transform': 'translate(0px, ' + scroll / 2 + ' %)'

            });

            // se trasladan el div textos del header verticalmente.
            // se concatena una cadena de texto con el valor scroll y el procentaje.
            $('.acerca-de article').css({
                'transform': 'translate(0px, -' + scroll / 4 + ' %)'

            });

        }
    }); //Para acceder al scroll de la ventana

    $(window).resize(function() {
        var windowwidth = $(window).width();

        // se trasladan el div textos del header verticalmente.
        // se concatena una cadena de texto con el valor scroll y el procentaje.
        if (windowwidth < 800) {
            $('.acerca-de article').css({
                'transform': 'translate(0px, 0px)'

            });
        }
    });

});
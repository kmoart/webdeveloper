<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Art Design Blog</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-6">
                    <!--En un tamaño extra pequeño el logo va a ocupar las 12 columnas, en el tamaño mediano va a ocupar 6 columnas-->
                    <a href="index.html"><img src="img/logoartdesign.jpg" alt="Art Design" width="100px"></a>
                </div>
                <div class="redes-sociales col-xs-12 col-sm-6">
                    <a class="youtube" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a>
                    <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>

        <nav class="menu">
            <div class="container">
                <div class="row">
                    <ul class="col-md-12">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">Javascript</a></li>
                        <li><a href="#">Jquery</a></li>
                        <li><a href="#">Photoshop</a></li>
                        <li><a href="#">Git</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="ad container hidden-xs">
            <!-- hidden-xs sirve en un tamaño extra pequeño, para que se oculte éste div-->
            <div class="row">
                <div class="col-ms-12">
                    <img src="img/ad.jpg" alt="publicidad">
                </div>
            </div>
        </div>

    </header>

    <div class="container">
        <div class="row">
            <section class="main col-md-8">
                <!--Se deja la sección main con un col de 8 columnas-->
                <!--Sección para ubicar los posts-->

                <div class="row posts single-post">
                    <!--Fila para los posts-->
                    <article class="col-md-12 post">
                        <!--Queremos que la clase articulo tenga una columna de tamaño medio en adelante que abarque 12 en ves de 6 como en la plantilla principal o index  con nombre post para que abarque el 100% del tamaño del div posts-->
                        <div class="contenedor">
                            <div class="thumb">
                                <img src="img/1.jpg" width="700" alt="">
                            </div>
                            <div class="info">
                                <h2 class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                                <p class="fecha">1 de Abril de 2020</p>

                                <div class="categorias">
                                    <a href="#">HTML</a>
                                    <a href="#">CSS</a>
                                </div>

                                <div class="texto">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi error culpa cum. Cumque eveniet, itaque voluptatum porro ab reiciendis repudiandae minima impedit error facere vero dignissimos omnis officia obcaecati
                                        molestiae.
                                    </p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, ullam non? Corporis doloremque cumque modi aperiam eligendi quisquam sit quis ducimus perspiciatis corrupti reprehenderit qui earum repellat, odit expedita
                                        asperiores
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae repellat voluptate nemo! Labore cum illum ratione tempore. Ducimus, sunt accusantium. At labore sit neque, laborum ab ullam blanditiis obcaecati!
                                        Maiores
                                    </p>
                                </div>

                            </div>
                        </div>
                    </article>

                </div>
            </section>
            <aside class="sidebar col-md-4">
                <!--Se deja la sección main con un col de 4 columnas-->
                <!--Sección para ubicar los artículos laterales o widgets-->
                <div class="widget redes-sociales">
                    <div class="titulo_seccion">
                        <h3>Siguenos</h3>
                        <div class="redes-sociales">
                            <a class="youtube" href="http://www.youtube.com">
                                <i class="icono fa fa-youtube"></i>
                                <span class="seguidores">130k</span>
                            </a>
                            <a class="twitter" href="http://www.twitter.com">
                                <i class="icono fa fa-twitter"></i>
                                <span class="seguidores">6k</span>
                            </a>
                            <a class="facebook" href="http://www.facebook.com">
                                <i class="icono fa fa-facebook"></i>
                                <span class="seguidores">6.5k</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget boletin">
                    <div class="titulo_seccion">
                        <h3>Suscríbete</h3>
                        <form class="formulario" action="">
                            <label for="email">Suscríbete a nuestro boletín</label>
                            <input type="email" id="email" placeholder="Correo Electrónico" required>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>

                <div class="widget ad">
                    <div class="contenedor-ad">
                        <a href="#"><img src="img/16.jpg" alt=""></a>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <footer>
        <div class="ad container hidden-xs">
            <!--Éste div va a estar oculto en un tamaño extra pequeño-->
            <div class="row">
                <div class="col-md-12">
                    <img src="img/ad.jpg" alt="">
                </div>
            </div>
        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Columna de tamaño medio en adelante de 12-->
                        <ul>
                            <li>
                                <a href="index.html">Inicio</a>
                            </li>
                            <li>
                                <a href="#">Acerca de</a>
                            </li>
                            <li>
                                <a href="#">Contacto</a>
                            </li>
                            <li>
                                <a href="#">Términos y Condiciones</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Sitio Creado por Camilo Aranda - Kmoart 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
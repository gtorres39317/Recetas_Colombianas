<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CocinaColombiana</title>
    <!-- Stiles que he agregado-->
    <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Portada.css" rel="stylesheet">
    <!--Nuevos estilos -->
    <link rel="stylesheet" href="css/estilo.css" media="screen">
    <link href="css/nicepage.css" rel="stylesheet" media="screen">
    <link href="css/Casa.css" rel="stylesheet" media="screen">
    <!--Importamos fuentes de google fonts -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">


    <!--Estilo del carrusel de la ultima seccion-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
    <!-- EstiloHeader    -->
    <link href="css/headers.css" rel="stylesheet">
    <!-- Estilo Navbar-->
    <link href="css/navbar.css" rel="stylesheet">






</head>

<body>
    <main>
        <!-- Navbar -->
        <div class="container" class="u-body u-xl-mode">
            <header
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="index.html"
                    class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>-->
                    <img src="img/cocinero.png" alt="" width="40" height="32" class="d-inline-block align-text-top">
                    <strong>CocinaColombiana</strong>
                </a>
                <!--Elementos del navbar con menu desplegable que funciona con JavaScritp-->
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.html" class="nav-link px-2 link-secondary">Inicio</a></li>
                    <li><a href="Recetas.html" class="nav-link px-2 link-dark">Recetas</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown"
                            aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown10">
                            <li><a class="dropdown-item" href="#">Desayuno</a></li>
                            <li><a class="dropdown-item" href="#">Alamuerzo</a></li>
                            <li><a class="dropdown-item" href="#">Recetas Saludables</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-link px-2 link-dark">Sobre Nosotros</a></li>
                    <li><a href="Contacto.php" class="nav-link px-2 link-dark">Contactanos</a></li>
                    <li><a href="Registro.php" class="nav-link px-2 link-dark">Registrate</a></li>
                    <li><a href="login.html" class="nav-link px-2 link-dark">Ingresa</a></li>
                </ul>
                <!--<div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2">Ingresa</button>
                    <button type="button" class="btn btn-success">Registrate</button>
                </div>-->
            </header>
        </div>
        <!--Seccion Responsive de portada con texto y botones -->
        <div id="portada" alt="Imagen gen??rica"
            class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">


            <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_ba7c" data-image-width="1200"
                data-image-height="1500">
                <div class="u-clearfix u-sheet u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-sheet-1">
                    <div class="u-container-style u-expanded-width-xs u-group u-group-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h1
                                class="u-align-center u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-1">
                                Cocina Colombiana</h1>
                            <p style="font-size: 30px" class="u-align-center u-text u-text-body-alt-color u-text-2">
                                Descubre lo mejor de la cocina colombiana,
                                aprende he innova en tu cocina con nuestras
                                recetas.</p>

                        </div>
                    </div>
                    <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div
                                    class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                                    <div
                                        class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-2">
                                        <a href="Registro.php"
                                            class="u-btn u-btn-round u-button-style u-palette-4-base u-radius-50 u-text-body-alt-color u-btn-1">Registrate</a>
                                    </div>
                                </div>
                                <div
                                    class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                                    <div
                                        class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-3">
                                        <a href="login.html"
                                            class="u-active-palette-1-base u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-text-palette-1-dark-2 u-white u-btn-2">
                                            Ingresa Aqu??
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

        </div>

        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"> </div>
        </div>
        <!--Nuevo dise??o: aqui agragamos un div contenedor y un div que sentre el contenido de la seccion-->
        <div class="container">
            <div class="center">

                <section class="u-align-center u-clearfix u-section-2" id="carousel_676f">
                    <div class="u-clearfix u-sheet u-sheet-1">
                        <div class="u-expanded-width u-list u-list-1">
                            <div class="u-repeater u-repeater-1">
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-1">
                                    <div class="u-container-layout u-similar-container u-container-layout-1">
                                        <a href="BandejaPaisa.html" class="nav-link px-2 link-dark">
                                            <img class="u-image u-image-default u-image-1" src="img/bandejapaisa.png"
                                                alt="" data-image-width="908" data-image-height="864">
                                            <h5
                                                class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-1">
                                                Bandeja Paisa.
                                            </h5>
                                        </a>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-2">
                                            $25
                                        </h6>
                                        <p class="u-align-left u-text u-text-3">Frijoles, Arroz Blanco, Carne
                                            molida, Chicharrones, Chorizos
                                            Cocidos, Huevos Fritos, Tajadas
                                            de Pl??tano, Aguacate, Hogao....</p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-2">
                                    <div class="u-container-layout u-similar-container u-container-layout-2">
                                        <a href="Ajiaco.html" class="nav-link px-2 link-dark">
                                            <img class="u-image u-image-default u-image-2" src="img/ajiaco.png" alt=""
                                                data-image-width="880" data-image-height="877">
                                            <h5
                                                class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-4">
                                                Ajiaco Santafere??o
                                            </h5>
                                        </a>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-5">
                                            $30
                                        </h6>
                                        <p class="u-align-left u-text u-text-6">pechuga, 1 atado de guascas,
                                            papa sabanera, papa pastusa,
                                            papa criolla....</p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-3">
                                    <div class="u-container-layout u-similar-container u-container-layout-3">
                                        <img class="u-image u-image-default u-image-3" src="img/posta.png" alt=""
                                            data-image-width="934" data-image-height="898">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-7">
                                            Posta Cartagenera
                                        </h5>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-8">
                                            $24
                                        </h6>
                                        <p class="u-align-left u-text u-text-9">Libra de Punta de anca o
                                            punta de nalga de res, Panela
                                            rallada, Zanahoria, Unidades
                                            de Hojas de Laurel...</p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-4">
                                    <div class="u-container-layout u-similar-container u-container-layout-4">
                                        <img class="u-image u-image-default u-image-4" src="img/sancocho.png" alt=""
                                            data-image-width="911" data-image-height="889">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-10">
                                            Sancocho de Res</h5>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-11">
                                            $34
                                        </h6>
                                        <p class="u-align-left u-text u-text-12">Costilla De Res, zanahoria, arvejas,
                                            rama cebolla larga, choclo, yuca, pl??tano verde y cilantro...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>





            </div>
        </div>

        <section class="u-clearfix u-palette-3-base u-valign-middle u-section-3" id="carousel_7769">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-28 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-1">
                                    Cocina
                                    Saludable<br>
                                </h1>
                                <p style="font-size: 20px" class="u-text u-text-body-alt-color u-text-2">
                                    Prepara recetas saludables para ti y toda tu familia con
                                    nuestras opcines de receta saludable, aprende a preparar snacks y deliciosos
                                    postres de la gastronom??a colombiana.
                                </p>
                                <a href="#"
                                    class="u-btn u-btn-round u-button-style u-palette-4-base u-radius-50 u-text-body-alt-color u-btn-2">Ver
                                    Recetas
                                </a>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-right-cell u-size-32 u-image-1"
                            data-image-width="1200" data-image-height="1500">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Tercera seccion de nuevo dise??o Carrusel-->

        <div class="container">

            <div class="center">

                <section class="u-align-center u-clearfix u-section-4" id="carousel_169a">
                    <div class="u-clearfix u-sheet u-sheet-1">
                        <h2 class="u-custom-font u-font-merriweather u-text u-text-1">
                            Aprende a&nbsp;<b>Cocinar</b>&nbsp;en Linea
                        </h2>
                        <p class="u-text u-text-2">Descubre lo mejor de la cocina colombiana y aprende he innova
                            en tu cocina con nuestra recetas.</p>
                        <div class="slideshow-container">

                            <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                <img src="img/15.jpg" style="width:100%">
                                <div class="text">Frijoles</div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="img/12.jpg" style="width:100%">
                                <div class="text">Sopas</div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="img/14.jpg" style="width:100%">
                                <div class="text">Carnes</div>
                            </div>

                        </div>
                        <br>

                        <div style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>

                        <script>
                            let slideIndex = 0;
                            showSlides();

                            function showSlides() {
                                let i;
                                let slides = document.getElementsByClassName("mySlides");
                                let dots = document.getElementsByClassName("dot");
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) { slideIndex = 1 }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active";
                                setTimeout(showSlides, 1000); // Change image every 2 seconds
                            }
                        </script>

                        <a href="#"
                            class="u-btn u-btn-round u-button-style u-palette-4-base u-radius-50 u-text-body-alt-color u-btn-1">Saber
                            mas</a>
                    </div>
                </section>



            </div>
        </div>
        <div class="container">
            <div class="center">

                <h2>Aqui va el Contador de visitas</h2>





            </div>


        </div>


        <!--Seccion del Footer-->
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                    <img src="img/cocinero.png" class="bi me-2" width="40" height="32">
                </a>
                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Precios</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="Contacto.html" class="nav-link px-2 text-muted">Contactanos</a></li>
                </ul>
            </footer>
        </div>







    </main>
    <!--Agregamos scrip para que invoque A JavaScrip y funcione el carrusel-->
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <!--Agregamos scrip para que invoque A JavaScrip-->
    <script src="js/bootstrap.bundle.min.js"></script>



</body>

</html>
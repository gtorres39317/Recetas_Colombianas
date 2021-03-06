<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <!-- Stiles que he agregado-->
    <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="css/carousel.css" rel="stylesheet">
    <!--Nuevos estilos -->
    <link rel="stylesheet" href="css/estilo.css" media="screen">
    <link href="css/nicepage.css" rel="stylesheet" media="screen">
    <link href="css/Casa.css" rel="stylesheet" media="screen">
    <!-- EstiloHeader    -->
    <link href="css/headers.css" rel="stylesheet">
    <!-- Estilo Navbar-->
    <link href="css/navbar.css" rel="stylesheet">
    <!--Importamos fuentes de google fonts -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">

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
                        <a  class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown"
                            aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown10">
                            <li><a class="dropdown-item" href="#">Desayuno</a></li>
                            <li><a class="dropdown-item" href="#">Alamuerzo</a></li>
                            <li><a class="dropdown-item" href="#">Recetas Saludables</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-link px-2 link-dark">Sobre Nosotros</a></li>
                    <li><a href="Contacto.html" class="nav-link px-2 link-dark">Contactanos</a></li>
                    <li><a href="Registro.html" class="nav-link px-2 link-dark">Registrate</a></li>
                    <li><a href="login.html" class="nav-link px-2 link-dark">Ingresa</a></li>
                </ul>
                <!--<div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Ingresa</button>
            <button type="button" class="btn btn-success">Registrate</button>
        </div>-->
            </header>
        </div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <img src="img/9.jpg">
                    <div class="container">

                        <div class="carousel-caption text-start">

                            <h1>Gastronomia Colombiana</h1>
                            <p>Un deleite al paladar</p>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <img src="img/12.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Aprende con nuestras recetas</h1>
                            <p>Prueba diferentes sabores</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <img src="img/13.jpg">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Pruba el sabor de Colombia</h1>
                            <p>Recetas de todas la regiones</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <!--Nuevo dise??o: aqui agragamos un div contenedor y un div que sentre el contenido de la seccion-->
        <div class="container">
            <div class="center">
                <div class="u-align-center u-clearfix u-section-4" id="carousel_169a">
                    <h2 class="u-custom-font u-font-merriweather u-text u-text-1">
                        Aprende a&nbsp;<b>Cocinar</b>&nbsp;en Linea
                    </h2>
                    <p class="u-text u-text-2">Descubre lo mejor de la cocina colombiana y aprende he innova
                        en tu cocina con nuestra recetas.</p>

                </div>

                <br>
                <section class="u-align-center u-clearfix u-section-2" id="carousel_676f">

                    <div class="u-clearfix u-sheet u-sheet-1">
                        <div class="u-expanded-width u-list u-list-1">

                            <div class="u-repeater u-repeater-1">

                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-1">
                                    <div class="u-container-layout u-similar-container u-container-layout-1">
                                        <!--con la ETIQUETA a agregas eL enlace-->
                                        <a href="BandejaPaisa.html" class="nav-link px-2 link-dark">
                                        <img class="u-image u-image-default u-image-1" src="img/bandejapaisa.png" alt=""
                                            data-image-width="908" data-image-height="864">
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
                                        <a href="#" class="nav-link px-2 link-dark">
                                        <img class="u-image u-image-default u-image-3" src="img/posta.png" alt=""
                                            data-image-width="934" data-image-height="898">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-7">
                                            Posta Cartagenera
                                        </h5>
                                    </a>
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
                                        <a href="#" class="nav-link px-2 link-dark">
                                        <img class="u-image u-image-default u-image-4" src="img/sancocho.png" alt=""
                                            data-image-width="911" data-image-height="889">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-10">
                                            Sancocho de Res
                                        </h5>
                                    </a>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-11">
                                            $34
                                        </h6>
                                        <p class="u-align-left u-text u-text-12">Costilla De Res, zanahoria, arvejas,
                                            rama cebolla larga, choclo, yuca, pl??tano verde y cilantro...</p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-2">
                                    <div class="u-container-layout u-similar-container u-container-layout-2">
                                        <a href="#" class="nav-link px-2 link-dark">
                                        <img class="u-image u-image-default u-image-2" src="img/img23.jpg" alt=""
                                            data-image-width="880" data-image-height="877">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-4">
                                            Changua
                                        </h5>
                                    </a>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-5">
                                            $15
                                        </h6>
                                        <p class="u-align-left u-text u-text-6">Huevos, agua, leche, ajo y cilantro,
                                            cebolla larga o cabezona, calados o tostadas, queso y sal.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-2">
                                    <div class="u-container-layout u-similar-container u-container-layout-2">
                                        <a href="#" class="nav-link px-2 link-dark">
                                        <img class="u-image u-image-default u-image-2" src="img/img24.jpg" alt=""
                                            data-image-width="880" data-image-height="877">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-4">
                                            Chuleta Valluna
                                        </h5>
                                    </a>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-5">
                                            $32
                                        </h6>
                                        <p class="u-align-left u-text u-text-6">Lomo de cerdo, pan rallado, cebolla
                                            larga,
                                            cebolla cabezona, harina de trigo, ajo, pimienta, huevos, comino, aceite
                                            vegetal...
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-2">
                                    <div class="u-container-layout u-similar-container u-container-layout-2">
                                        <a href="#" class="nav-link px-2 link-dark">
                                        <img class="u-image u-image-default u-image-2" src="img/img25.png" alt=""
                                            data-image-width="880" data-image-height="877">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-4">
                                            Tamales Tolimenses
                                        </h5>
                                    </a>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-5">
                                            $5
                                        </h6>
                                        <p class="u-align-left u-text u-text-6">Harina de maiz, manteca de cerdo, caldo
                                            de pollo,
                                            polvo de hornear, sal, hojas de tamal, tomate verde hidratado, pechuga
                                            desmenuzada,
                                            cebolla...
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-2">
                                    <div class="u-container-layout u-similar-container u-container-layout-2">
                                        <a href="#" class="nav-link px-2 link-dark">
                                        <img class="u-image u-image-default u-image-2" src="img/img26.png" alt=""
                                            data-image-width="880" data-image-height="877">
                                        <h5
                                            class="u-align-center u-custom-font u-font-merriweather u-text u-text-default u-text-4">
                                            Cocido Boyacense
                                        </h5>
                                    </a>
                                        <h6
                                            class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-5">
                                            $23
                                        </h6>
                                        <p class="u-align-left u-text u-text-6">aceite vegetal, cebolla larga, tomates,
                                            cilantro,
                                            papa sabanera, papa pastusa, agua, costilla de cerdo, carne de res, mazorca,
                                            habas...</p>
                                    </div>
                                </div>











                            </div>
                        </div>

                    </div>
                </section>





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
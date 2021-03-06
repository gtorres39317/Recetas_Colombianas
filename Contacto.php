<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <!-- Stiles que he agregado-->
    <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Portada.css" rel="stylesheet">
    <!--Nuevos estilos -->
    <link rel="stylesheet" href="css/estilo.css" media="screen">
    <link href="css/nicepage.css" rel="stylesheet" media="screen">
    <link href="css/Casa.css" rel="stylesheet" media="screen">
    <!--Estilos de la seccion de contacto -->
    <link href="css/estilo.css"rel="stylesheet"  media="screen">
    <link href="css/Página-1.css"rel="stylesheet"  media="screen">
    <!-- EstiloHeader    -->
    <link href="css/headers.css" rel="stylesheet">
    <!-- Estilo Navbar-->
    <link href="css/navbar.css" rel="stylesheet">
    <!--Importamos fuentes de google fonts -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
    <!--Script google maps-->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8cBTmYLQkdRtCXffX2MOqM9ows2wIiNc&callback=initMap" type="text/javascript"></script>
    <script src="./js/maps.js"></script>
    <!--script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>  
    <script type="text/javascript" src="js/jquery.gomap-1.3.3.min.js"></script-->
</head>

<body>
    <main>
        <!-- Navbar -->
        <div class="container" class="u-body u-xl-mode">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="index.php"
                    class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <img src="img/cocinero.png" alt="" width="40" height="32" class="d-inline-block align-text-top">
                    <strong>CocinaColombiana</strong>
                </a>
                <!--Elementos del navbar con menu desplegable que funciona con JavaScritp-->
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 link-secondary">Inicio</a></li>
                    <li><a href="recetas.html" class="nav-link px-2 link-dark">Recetas</a></li>
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
                    <li><a href="login.php" class="nav-link px-2 link-dark">Ingresa</a></li>
                </ul>
            </header>
        </div>
        <div id="portada2" alt="Imagen genérica"
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

            </section>

        </div>
        <!--Contenedor de Contactenos-->
        <div class="container">
            <section class="u-clearfix u-section-1" id="carousel_5f96">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <div class="u-align-center u-container-style u-group u-group-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h2 class="u-text u-text-1">Contactanos</h2>
                            <p class="u-text u-text-2">Somos un equipo de desarrolladores de la Univesidad EAN.</p>
                        </div>
                    </div>

                    <!--Contenedor de Google Maps-->
                    <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-col">
                                
                                <div class="u-size-38 u-size-60-md">
                                    <div class="u-layout-col">
                                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-right-cell u-size-60 u-layout-cell-1 ">
                                            <div class="u-container-layout u-container-layout-2">
                                                <div class="u-align-left u-border-2 u-expanded u-hover-feature u-map u-grey-10 u-map-1" data-animation-name="" data-animation-duration="0" data-animation-direction="" id="map">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!--Informacion de contacto-->

                                <div class="u-size-22 u-size-60-md">
                                    <div class="u-layout-row">
                                        <div
                                            class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                                            <div class="u-container-layout u-valign-top u-container-layout-3">
                                                <h3 class="u-text u-text-3">Cocina Colombiana</h3>
                                                <p class="u-text u-text-4"> Cra 11 #78 - 47, Bogotá, Colombia</p>
                                                <p class="u-text u-text-5">+57 3112349671</p>
                                                <p class="u-text u-text-6">
                                                    <a href="mailto:contacts@esbnyc.com">cocinacolcontacto@gmail.com</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!--Integrantes-->
                                        <div
                                            class="u-align-left u-container-style u-layout-cell u-palette-3-base u-right-cell u-size-30 u-layout-cell-3">
                                            <div class="u-container-layout u-valign-top u-container-layout-4">
                                                <h5 class="u-text u-text-7">Nuestro equipo:</h5>
                                                <p class="u-text u-text-8"><b>
                                                        <span style="font-weight: 400;">DANIEL
                                                            BERMUDEZ MEDINA&nbsp;</span></b>
                                                    <br><b>
                                                        <span style="font-weight: 400;">SINDY
                                                            SULAY SALINAS HERREÑO</span></b>&nbsp;<br><b>
                                                        <span style="font-weight: 400;">GERMAN
                                                            ANTONIO TORRES AVILA</span></b>&nbsp;<br><b>
                                                        <span style="font-weight: 400;">EDGAR
                                                            ANDREY TRINIDAD BERNAL</span></b>&nbsp;&nbsp;<br>
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </section>
            <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-515b">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <h1 class="u-text u-text-default u-text-1">Escribenos</h1>
                    <div class="u-form u-form-1">
                        <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form"
                            style="padding: 10px" source="email" name="form">
                            <div class="u-form-group u-form-name u-label-none">
                                <label for="name-3b9a" class="u-label">Name</label>
                                <input type="text" placeholder="Ingresa tu nombre" id="name-3b9a" name="nombre"
                                    class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1"
                                    required="">
                            </div>
                            <div class="u-form-email u-form-group u-label-none">
                                <label for="email-3b9a" class="u-label">Email</label>
                                <input type="email" placeholder="Ingresa tu correo" id="email-3b9a" name="email"
                                    class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2"
                                    required="">
                            </div>
                            <div class="u-form-group u-form-message u-label-none">
                                <label for="message-3b9a" class="u-label">Message</label>
                                <textarea placeholder="Escrbe tu mensaje" rows="4" cols="50" id="message-3b9a"
                                    name="mensaje"
                                    class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3"
                                    required=""></textarea>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                    class="u-border-2 u-border-black u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-1">enviar<br>
                                </a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent.
                            </div>
                            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix
                                errors then try again. </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                    </div>
                </div>
            </section>
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
                    <li class="nav-item"><a href="Contacto.php" class="nav-link px-2 text-muted">Contactanos</a></li>
                </ul>
            </footer>
        </div>






    </main>
    <!--Agregamos scrip para que invoque A JavaScrip y funcione el carrusel-->
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
     <!--Agregamos scrip para que invoque A JavaScrip y funcione el MAPA AUNQUE NO FUNCIONAN-->
    <script class="u-script" type="text/javascript" src="js/jquery02.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/page.js" defer=""></script>
    <!--Agregamos scrip para que invoque A JavaScrip-->
    <script src="js/bootstrap.bundle.min.js"></script>
   
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicia sesion</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- EstiloHeader    -->
	<link href="css/headers.css" rel="stylesheet">
	<!-- Estilo Navbar-->
	<link href="css/navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	

</head>

<body>

	<main>
		<!-- Navbar -->
		<nav class="navbar navbar-light bg-light">
			<div class="container-fluid">
				<a href="index.php"
					class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">

					<img src="img/cocinero.png" alt="" width="40" height="32" class="d-inline-block align-text-top">
					<strong>CocinaColombiana</strong>
				</a>
				<!--Elementos del navbar con menu desplegable que funciona con JavaScritp-->
				<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
					<li><a href="index.php" class="nav-link px-2 link-dark">Inicio</a></li>
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
					<li><a href="login.php" class="nav-link px-2 link-dark">Ingresa</a></li>
				</ul>
			</div>
		</nav>
	
			<div class="container">
				<div class="center">

					<div class="login">
						<div class="login-screen">
							<div class="app-title">
								<h1>Inicia sesion</h1>
							</div>

							<div class="login-form">

								<div class="control-group">
									<input type="email" class="login-field" value="" placeholder="E-mail" required
										id="login-name">
									<label class="login-field-icon fui-user" for="login-name"></label>
								</div>

								<div class="control-group">
									<input type="password" class="login-field" value="" placeholder="Contrase??a"
										required id="login-pass">
									<label class="login-field-icon fui-lock" for="login-pass"></label>
								</div>

								<a class="btn btn-primary btn-large btn-block" href="index.html">Ingresar</a>
								<a class="login-link" href="#">Olvidaste tu contrase??a?</a>
							</div>
						</div>
					</div>



				</div>

			</div>
 <!--Codigo del footer-->
 <!--<div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>
          
              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
               
                <img src="img/cocinero.png"class="bi me-2" width="40" height="32" >
              </a>
          
              <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sobre Nosotros</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Precios</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contactanos</a></li>
              </ul>
            </footer>
          </div>-->



	</main>
	<!--Agregamos scrip para que invoque A JavaScrip-->
	<script src="js/bootstrap.bundle.min.js"></script>



</body>

</html>
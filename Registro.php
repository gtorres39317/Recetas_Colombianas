<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/registro.css">
  <title>Registro</title>
  <link rel="stylesheet" href="css/registro.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- EstiloHeader    -->
	<link href="css/headers.css" rel="stylesheet">
	<!-- Estilo Navbar-->
	<link href="css/navbar.css" rel="stylesheet">

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
			</div>
		</nav>
    <section class="form-register">
      <h4>Formulario Registro</h4>
      
	  <div class="container">
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      <div class="signup-form-container"> 
        
        <!-- form start -->
        <form method="post" role="form" id="register-form" autocomplete="off">
          <div class="form-header">
            <h3 class="form-title"><i class="fa fa-user"></i>Registrarme</h3>
          </div>
          <div class="form-body"> 
            
            <!-- json responde -->
            <div id="errorDiv"></div>
            <!-- json responde-->
            <!-- Nombre -->
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">  </div>
                <input name="name" type="text" id="name" class="form-control" placeholder="Nombres" maxlength="40" autofocus="true">
              </div>
              <span class="help-block" id="error"></span> 
            </div>
            <!-- Apellido -->
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend"> </div>
                <input name="apellido" type="text" id="name" class="form-control" placeholder="Apellidos" maxlength="40" autofocus="true">
              </div>
              <span class="help-block" id="error"></span> 
            </div>
            
            <!-- Correo -->
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">  </div>
                <input name="email" id="email" type="text" class="form-control" placeholder="Email" maxlength="50">
              </div>
              <span class="help-block" id="error"></span> 
              </div>
            <!-- Contraseña-->
            <div class="row">
              <div class="form-group col-lg-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">  </div>
                  <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña">
                </div>
                <span class="help-block" id="error"></span> </div>
                   <!-- Repetir Contraseña-->
              <div class="form-group col-lg-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend"> </div>
                  <input name="cpassword" type="password" class="form-control" placeholder="Repita contraseña">
                </div>
                <span class="help-block" id="error"></span> </div>
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary" id="btn-signup">
                Registrarme </button>
          </div>
        </form>
      </div>
            
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->






    </section>

  </main>
  <script src="js/jquery-1.12.4-jquery.min.js"></script> 
<script src="js/jquery.validate.min.js"></script> 
<script src="js/ValidarRegistro.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<!--<script src="assets/js/vendor/popper.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>
  <!--Agregamos scrip para que invoque A JavaScrip-->
	<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>
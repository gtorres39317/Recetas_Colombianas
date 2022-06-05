<?php
	header('Content-type: application/json');
	require_once 'config.php';
	$response = array();
	// Verificacion del envio del formulario via AJAX
	if ($_POST) {
		
		$name = trim($_POST['name']);
		$apellido = trim($_POST['apellido']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['cpassword']);
		
		$full_name = strip_tags($name);
		$full_apellido = strip_tags($apellido);
		$user_email = strip_tags($email);
		$user_pass = strip_tags($pass);
		
		// sha256 password hashing
		$hashed_password = hash('sha256', $user_pass);
		// Consulta para insertar los registros a la base de datos 
		$query = "INSERT INTO usuario(nombre,apellido,correo,contrasena) VALUES(:name,:apellido, :email, :pass)";
		
		$stmt = $DBcon->prepare( $query );
		$stmt->bindParam(':name', $full_name);
		$stmt->bindParam(':apellido', $full_apellido);
		$stmt->bindParam(':email', $user_email);
		$stmt->bindParam(':pass', $hashed_password);
		
		// Verifica el registro exitoso
        if ( $stmt->execute() ) {
			$response['status'] = 'success';
			$response['message'] = 
			'<span class="glyphicon glyphicon-ok"></span> &nbsp; Usted se ha registrado con éxito, puede iniciar sesión ahora';
        } else {
            $response['status'] = 'error'; // No pudo registrarse
			$response['message'] =
			 '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No se pudo registrar, intente de nuevo más tarde';
        }	
	}
	
	echo json_encode($response);
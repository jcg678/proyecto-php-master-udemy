<?php
session_start();
if(isset($_POST)){
	//Recoger los valores del formulario
	$nombre = isset($_POST['nombre'])? $_POST['nombre'] : false;
	$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false;
	$password = isset($_POST['password']) ? $_POST['password'] : false ;

	$errores = [];
	//Validar los datos antes de guardarlos en la base de datos
	//Validar nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ) {
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es valido";
	}
	//validar apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos) ) {
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son validos";
	}
	//validar email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
		$email_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['email'] = "El email no es valido";
	}

	//validar password
	if(!empty($password)  ) {
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "La contraseña esta vacia";
	}

	$guardar_usuario = false;
	if(count($errores) == 0){
		//insertar usuario
		$guardar_usuario = true;
	}else{
		$_SESSION['errores'] = $errores;
		header('Location: index.php');
	}

}	
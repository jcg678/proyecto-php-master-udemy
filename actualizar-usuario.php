<?php

if(isset($_POST)){
	require_once 'includes/conexion.php';

	//session_start();
	if (!isset($_SESSION)) {
		session_start();
	}

	//Recoger los valores del formulario actulizacion
	$nombre = isset($_POST['nombre'])? mysqli_real_escape_string($db , $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db , $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db , trim($_POST['email'])) : false;


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


	$guardar_usuario = false;
	if(count($errores) == 0){
		$usuario=$_SESSION['usuario'];
		//insertar usuario
		$guardar_usuario = true;

		//Comprobar si el email ya existe
		$sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
		$isset_email =mysqli_query($db, $sql);
		$isset_user = mysqli_fetch_assoc($isset_email);

		if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
			//Actulizar usuario en la tabla de usuarios de la bbdd
			$usuario = $_SESSION['usuario'];
			$sql= "UPDATE usuarios SET ".
				  "nombre = '$nombre', ".
				  "apellidos = '$apellidos', ".
				  "email = '$email' ".
				  "WHERE id = ".$usuario['id'];
				// var_dump($sql);die();
			$guardar = mysqli_query($db, $sql);

			if($guardar){
				$_SESSION['usuario']['nombre'] = $nombre;
				$_SESSION['usuario']['apellidos'] = $apellidos;
				$_SESSION['usuario']['email'] = $email;
				$_SESSION['completado'] = "Actualizado con exito";
			}else{
				$_SESSION['errores']['general'] = "Fallo al actualizar";
			}
		}else{
			$_SESSION['errores']['general'] = "El email ya existe";
		}

	}else{
		$_SESSION['errores'] = $errores;

	}

}	

header('Location: mis-datos.php');
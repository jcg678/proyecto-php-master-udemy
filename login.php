<?php
//Iniciar la sesion y la cononexion a bbdd

require_once 'includes/conexion.php';

//regor datos del formulario

if(isset($_POST)){
     if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }

	$email= trim($_POST['email']);
	$password = $_POST['password'];

	//consulta para comprobar credenciales
	$sql ="SELECT * FROM USUARIOS WHERE email='$email' ";
	$login = mysqli_query($db, $sql);

	if($login && mysqli_num_rows($login)==1){
		$usuario = mysqli_fetch_assoc($login);

		//comprobar contraseña
		$verify = password_verify($password, $usuario['password']);

		if($verify){
			//sesion para guardar datos
			$_SESSION['usuario']= $usuario;

		}else{
			//sesion con fallo
			$_SESSION['error_login']= "Login incorrecto";
		}
		
	}else{
		//mensaje de error
		$_SESSION['error_login']= "Login incorrecto";
	}


}

header('Location: index.php');
//Comprobar contraseña




//utilizar sesion para guardar los datos del usuario creado

// si algo falla enviar una sesion con el fallo

//Redirigiar al index.php
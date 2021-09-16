<?php 
	session_start();
	include_once 'conexion.php';//se incluye la gestion de conexion
	$usuario = $_POST['txtUsu'];//se trae los datos del formulario
	$contrasena = $_POST['txtPass'];
	//se hace la consulta en la base de datos en la tabla t_usuario donde se encuentra
	//el usuario admin se consulta en la tabla t_usuario donde estan los admin
	//en este caso el unico usuario usuario admin creado es omar5234 password 1234
	//en la tabla registro_alumno solo estan los usuarios que pueden ser editados
	$sentencia = $bd->prepare('select * from t_usuario where 
								nombre_usu = ? and password_usu = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);//se ejecuta la peticion
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');//si los datos son errados regresa a login nuevamente
	}elseif($sentencia->rowCount() == 1){//si los datos son correctos me traslada a la pagina de admin
		$_SESSION['nombre'] = $datos->nombre_usu;
		header('Location: index1.php');//si los datos son correctos me traslada a la pagina de admin
	}
?>
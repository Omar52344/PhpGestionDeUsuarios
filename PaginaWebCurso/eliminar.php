<?php  
	if (!isset($_GET['id'])) {
		exit();
	}
    //se elimina el registro con el id traido en la sentencia SQL
	$codigo = $_GET['id'];
	include 'conexion.php';
	$sentencia = $bd->prepare("DELETE FROM registroalumno WHERE id_usuario = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: index1.php');
	}else{
		echo "Error";
	}

?>
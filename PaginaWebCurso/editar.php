<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index1.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM registroalumno WHERE Id_usuario = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Alumno</title>
	<meta charset="utf-8">
	<!-- importaciones css-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
	<center>
		<!-- se genera un formulario de edicion donde se traen los datos antiguos del usuario a editar-->
		<h3>Editar Usuario:</h3>
		<form method="POST" action="editarProceso.php">
			<table class="table">
				<tr class="table-primary">
					<td class="fs-4">ID:<?php echo $id ?></td>
					<td><input type="text" name="txtid" value=<?php echo $id?> ></td>
				</tr>
				
				<tr class="table-primary">
					<td>Nombre de Usuario: </td>
					<td><input type="text" name="txtNombre"  value=<?php echo $persona->nombre_usuario; ?> ></td>
				</tr>
                <tr class="table-primary">
					<td>Apellido: </td>
					<td><input type="text" name="txtApellido" value=<?php echo $persona->apellido; ?>></td>
				</tr>

				<tr class="table-primary">
					<td>Telefono: </td>
					<td><input type="text" name="txtTelefono" value=<?php echo $persona->telefono; ?>></td>
				</tr>



				<tr class="table-primary">
					<td>password: </td>
					<td><input type="text" name="txtPass" value=<?php echo $persona->password; ?>></td>
				</tr>
				<tr class="table-primary">
					<td>Correo: </td>
					<td><input type="text" name="txtcorreo" value=<?php echo $persona->Correo; ?>></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr class="table-primary">
					<td><input  class="btn btn-dark" type="reset" name=""></td>
					<td><input  class="btn btn-dark" type="submit" value="Actualizar"></td>
				</tr>

				
			</table>

		</form>
		<div class="btn-group">
                <a href="index1.php" class="p-3 btn btn-primary active" aria-current="page">Regresar</a>
                <a href="acceso.php" class="p-3 btn btn-success">Login</a>
                <a href="index.php" class=" p-3 btn btn-dark">Inicio</a>
 
                 </div>
	</center>
</body>
</html>
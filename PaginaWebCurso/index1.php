<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {//trae las variables para mostrar el nombre de usuario logeado
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'conexion.php';
		//realiza la consulta de usuarios usuarios registros ordenados alfabeticamente
		$sentencia = $bd->query("SELECT * FROM registroalumno ORDER BY nombre_usuario ASC;");
		$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}

	
	

	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
       
    <title>Página web Omar Jaramillo</title>
    
    <link rel="stylesheet" href="css/estilos.css">
    
        <link rel="shortcut icon" href="" type="image/x-icon">
		<!-- importaciones css-->
    <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     
</head>
<body>
	<center>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                
            </div>
            
            
            <div class="titulo">
		<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
                </div>
            <br>
            <br>
		<a class="btn btn-warning" href="cerrar.php">Cerrar Sesión</a>
                <br>
            <br>

            <div class="">
		    <h3>Lista de Usuarios</h3>
                <br>
                <br>
				
                <table class="table descripcion">
			<tr>
				<td class="fs-6 fw-bold">IDUsuario_</td>
				<td class="fs-6 fw-bold">NombreUsuario_</td>
				<td class="fs-6 fw-bold">Apellido_</td>
				<td class="fs-6 fw-bold">Telefono_</td>
				<td class="fs-6 fw-bold">Password_</td>
				<td class="fs-6 fw-bold">Correo_</td>
				
				<td class="fs-6 fw-bold">HoraCreacion_</td>
				<td class="fs-6 fw-bold">HoraChange_</td>
				
			</tr>

			<?php 
				foreach ($alumnos as $dato) {
					?>
					<tr>
						<!--se trae los datos ordenados en la tabla creada renderizada -->
						<td class="fs-6 fw-bold"><?php echo $dato->Id_usuario; ?></td>
						<td class="fs-6 fw-bold"><?php echo $dato->nombre_usuario; ?></td>
                        <td class="fs-6 fw-bold" ><?php echo $dato->apellido; ?></td>
						<td class="fs-6 fw-bold" ><?php echo $dato->telefono; ?></td>
						<td class="fs-6 fw-bold"><?php echo $dato->password; ?></td>
						<td class="fs-6 fw-bold"><?php echo $dato->Correo; ?></td>
						
						<td class="fs-6 fw-bold" ><?php echo $dato->horacrea; ?></td>
						<td class="fs-6 fw-bold"><?php echo $dato->horachange; ?></td>
						
						<td><a class="btn btn-dark"href="editar.php?id=<?php echo $dato->Id_usuario; ?>">Editar</a></td>
						<td><a class="btn btn-dark"href="eliminar.php?id=<?php echo $dato->Id_usuario; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>
			


                </div>
                <br>
                <br>
		<!-- inicio insert -->
		
		
		
		<!-- fin insert-->
          <a class="btn btn-warning" href="index.php">Inicio</a>
	            <br>
                <br>
        
        
        </center>
</body>
</html>
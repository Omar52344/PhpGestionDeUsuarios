<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
	//se traen los datos del formulario de editar
	$idusuario = $_POST['txtid'];
	$nombre = $_POST['txtNombre'];
	$apellido=$_POST['txtApellido'];
	$pass = $_POST['txtPass'];
	$correo= $_POST['txtcorreo'];
	$telefono=$_POST['txtTelefono'];
	//se crea la funcion para llamar la hora y fecha para registrar la 
	//ultima modificacion
	$DateAndTime = date('m-d-Y h:i:s a', time());

    //se valida la expresion regular del correo y se crean variables
	//para mostrar en pantalla 
	if(preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/",$correo)){
		$mensajeCorreo="Correo valido";
		$claseCorreo="alert alert-success";
		$clasecompleto="";
	
   
	   }else if($correo=""){
		   $mensajeCorreo="Correo vacio";
		   $claseCorreo="alert alert-danger";
		   $clasecompleto="";
	   }else{
		   $mensajeCorreo="Correo No Valido";
		   $claseCorreo="alert alert-danger";
		   $clasecompleto="";
   
	   }
   //se valida la expresion regular del password y se crean variables
	//para mostrar en pantalla 
	   if(preg_match("/^[a-zA-Z]\w{3,14}$/",$pass)){
		   $mensajepass=" password valido";
		   $clasepass="alert alert-success";
		   $clasecompleto="";
	  
		  }else if($correo=""){
			  $mensajepass="password vacio";
			  $clasepass="alert alert-danger";
			  $clasecompleto="";
		  }else{
			  $mensajepass="password No Valido";
			  $clasepass="alert alert-danger";
			  $clasecompleto="";
	  
		  }
   
   
		  //se valida la expresion regular del correo y password si las dos
		  //si las dos estan correctas se crea la peticion a la base de datos
		  //se ejecuta el registro actualizado con la sentencia update
   
	  if(preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/",$correo) and preg_match("/^[a-zA-Z]\w{3,14}$/",$pass)){
		$sentencia = $bd->prepare("UPDATE registroalumno SET id_usuario=?, nombre_usuario = ?,apellido = ?,telefono=?, password = ?, 
		Correo = ?,horachange= ?  WHERE id_usuario = ?;");
        $resultado = $sentencia->execute([$idusuario,$nombre,$apellido,$telefono,$pass,$correo,$DateAndTime,$idusuario]);


		   $clasecompleto="Registro Exitoso";
   
	  }
   



	  if ($resultado === TRUE) {
		//header('Location: index1.php');
	}else{
		echo "Error";
	}












	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!--importaciones Css-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
<center>
<!-- se establecen los objetos para mostrar los resultados en pantalla-->
<div class="<?php echo $claseCorreo?>" role="alert">
<h1><?php echo $mensajeCorreo ?></h1>
</div>

<div class="<?php echo $clasepass?>" role="alert">
<h1><?php echo $mensajepass ?></h1>
</div>

<div class="<?php echo $clasepass?>" role="alert">
<h1><?php echo $clasecompleto ?></h1>
</div>

<div class="btn-group">
  <a href="editar.php" class="btn btn-primary active" aria-current="page">Regresar</a>
  <a href="acceso.php" class="btn btn-success">Login</a>
  <a href="index.php" class="btn btn-dark">Inicio</a>
</div>

</center>




<h1></h1>   
	
</body>
</html>
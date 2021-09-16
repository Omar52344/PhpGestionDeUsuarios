<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'conexion.php';

	
	
	//se reciben los datos de el formulario de la pagina registro 
	$idusuario = $_POST['txtid'];
	$nombre = $_POST['txtNombre'];
	$apellido=$_POST['txtApellido'];
	$pass = $_POST['txtPass'];
	$correo= $_POST['txtcorreo'];
	$telefono= $_POST['txtTelefono'];
	//se ejecuta la funcion de tiempo y fecha
	$DateAndTime = date('m-d-Y h:i:s a', time());


	//validacion de correo expresion regular
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
//validacion de password expresion regular
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


	   
//si se cumplen las dos validaciones se ejecuta la sentencia SQL
//se hace el registro en la tabla registroalumno donde se encuentran las personas registradas
   if(preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/",$correo) and preg_match("/^[a-zA-Z]\w{3,14}$/",$pass)){
	   
		$sentencia = $bd->prepare("INSERT INTO registroalumno(id_usuario,nombre_usuario,apellido,telefono,password,Correo,horacrea,horachange) VALUES (?,?,?,?,?,?,?,?);");
		$resultado = $sentencia->execute([$idusuario,$nombre,$apellido,$telefono,$pass,$correo,$DateAndTime,$DateAndTime]);
	    $clasecompleto="Registro Exitoso";

   }

	 
        

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		//header('Location: index.php');
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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
<center>
<!--se crean los objetos que muestran los resultados en pantalla-->
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
  <a href="Registro.php" class="btn btn-primary active" aria-current="page">Regresar</a>
  <a href="acceso.php" class="btn btn-success">Login</a>
  <a href="index.php" class="btn btn-dark">Inicio</a>
 
</div>

</center>




<h1></h1>   
	
</body>
</html>
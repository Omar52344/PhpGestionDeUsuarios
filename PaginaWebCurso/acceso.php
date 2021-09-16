<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
        <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <!--importaciones Css-->
    <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>
<body>
    <div class="">
    
    
    
    
    
	<center>
    <div class="">
            <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                
            </div>

            <br>
            
            <h1 Class="fs-4 fw-bold">INGRESA TUS DATOS</h1>
            
            
              
              
                
            
            
        <!--formulario de ingreso de usuarios y acceso a los cursos agregados -->        
		<form class="border border-primary border border-5 rounded-circle"method="POST" action="accesoproceso.php">
        <br>            
        <label Class="fs-4 fw-bold">Usuario: </label>
			<input type="text" name="txtUsu">
			<br>
            <br>
            
			<label Class="fs-4 fw-bold" >Password: </label>
			<input type="password" name="txtPass">
			<br>
            <br>
			<input class="btn btn-warning"type="submit" value="Iniciar sesión">
		</form>
           <br>      
           <!--se puede solicitar recuperacion de password de la cuenta con correo valido-->
          <a class="btn btn-danger"href="passwordrecover.php">Recuperar Password</a>    
         
         
         
         <a class="btn btn-primary" href="index.php">Inicio</a> 
         <br>
         <br><br>
         <br><br>
         <br><br>
         <br><br>
         <br><br>
         <br><br>
         <br>     
    </div>
        </center>

           
</body>
</html>
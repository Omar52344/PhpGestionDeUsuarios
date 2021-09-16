

<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
        <link rel="shortcut icon" href="" type="image/x-icon">
    <!--importaciones css-->
    <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
        <div class="container-lg">
	<center>
            <div class="descripcion">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!--formulario de Login-->
		<form method="POST" action="loginProceso.php">
			
                        <label>Usuario:</label>
			<input type="text" name="txtUsu">
			<br>
                        <br>
			<label>Password</label>
			<input type="password" name="txtPass">
			<br>
                        <br>
			<input type="submit" class="btn btn-primary"value="Iniciar sesión">

                        
		</form>
            <br>
             <br>
               
         <!--boton para volver a inicio-->
             <a class="vinculo btn btn-light"href="index.php">Inicio</a>
         </div>
            
            
        </center>

        </div>
</body>
</html>
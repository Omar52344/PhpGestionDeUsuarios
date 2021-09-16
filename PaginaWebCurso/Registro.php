
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de usuarios</title>
	<meta charset="utf-8">
       
    <title>Página web Omar Jaramillo</title>
    
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
	<!--importaciones css-->
    <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     
        
</head>
<body>
	<center>
            
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                
            
            
            
            
		<h1>Bienvenido: </h1>
		
		<table>
			

			
			
		</table>

		<!-- formulario para registro de nuevo usuario -->
		<hr>
		<h3>Bienvenido Registrate:</h3>
                <form method="POST" action="insertarregistro.php">
                    <div class="descripcion">
						
					
			<table class="table">
				<tr>
					<td class="fs-4 fw-bold">ID usuario: </td>
					<td><input type="text" name="txtid"></td>
				</tr>
				
				<tr>
					<td class="fs-4 fw-bold">Nombre de Usuario: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
                <tr>
					<td class="fs-4 fw-bold" >Apellido: </td>
					<td><input type="text" name="txtApellido"></td>
				</tr>
                <tr>
					<td class="fs-4 fw-bold" >Telefono: </td>
					<td><input type="text" name="txtTelefono"></td>
				</tr>

                <tr>
					<td class="fs-4 fw-bold">password: </td>
					<td><input type="text" name="txtPass"></td>
				</tr>
				<tr>
					<td class="fs-4 fw-bold">Correo: </td>
					<td><input type="text" name="txtcorreo"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input  class="btn btn-warning"type="reset" name=""></td>
					<td><input class="btn btn-warning" type="submit" value="Registrarse"></td>
				</tr>
			</table>
                        </div>
		</form>
		<!-- fin insert-->
		<a class="btn btn-primary" href="index.php">Inicio</a>

	</center>
</body>
</html>
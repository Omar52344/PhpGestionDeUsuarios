<!DOCTYPE html>
<html>
<head>
	<title>Recuperar Usuario</title>
	<meta charset="utf-8">
        <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>
<body>
	<center>
		<h3 class="fs-4 fw-bold">Ingrese Datos</h3>
                <form method="POST" action="accesopasswordrecover.php">
                    <div class="descripcion">	
                    <table>
                            
				
				
				
				
				<tr>
					<td>Ingrese Correo </td>
					<td><input type="text" name="txtcorreo"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input class="btn btn-primary"type="reset" name=""></td>
					<td><input class="btn btn-success" type="submit" value="Enviar"></td>
				</tr>
			</table>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        </div>
		</form>
	</center>
</body>
</html>
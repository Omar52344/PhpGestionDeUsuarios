<?php  


use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;


//Load Composer's autoloader
  require("PHPMailer/PHPMailer.php");
  require("PHPMailer/SMTP.php");
  require("PHPMailer/Exception.php");
   
//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer();
	 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'conexion.php';
	
	$correo= $_POST['txtcorreo'];
    //se confirma que exista el correo en la base de datos para enviar el password
    //via correo

	$sentencia = $bd->prepare("SELECT * FROM registroalumno WHERE Correo = ?;");
	$resultado = $sentencia->execute([$correo]);
        
        

	if ($resultado === TRUE) {
            
            $sentencias = $bd->query("SELECT * FROM registroalumno;");
		$alumnos = $sentencias->fetchAll(PDO::FETCH_OBJ);
		echo "Correcto";
	}else{
		echo "Error";
	}



	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
       
    <title>Página web Omar Jaramillo</title>
    
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
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
            
            
            
		<h1>Bienvenido: </h1>
		
		
		<table>
			<tr>
				
				<td class="fs-4 fw">Correo</td>
                 
			</tr >

			<?php 
            //si el correo existe se muestra la confirmacion de correo enviado
				foreach ($alumnos as $dato) {
                                    if  ($dato->Correo==$correo){
                                        
                                    
					?>
					<tr>
						
						<td class="fs-4 fw-bold"><?php echo $dato->Correo; ?></td>
						    <?php 
                                                    $correouno=$dato->Correo;
						    $passuno = $dato->password;?>
					       <td class="fs-4 fw-bold"><?php $passuno ?></td>
                                        </tr>
                                        
                                        
					<?php
//se ejecuta el proceso del correo usando un servidor de correo y un correo real
//para enviar el dato almacenado en la base
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'omarjaramillo8@gmail.com';                     //SMTP username
    $mail->Password   = 'Jaramillo2312';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('omarjaramillo8@gmail.com', 'Cursos Programacion');
    $mail->addAddress($correouno, 'Joe User');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Envio Password';
    $mail->Body    = $passuno;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Revisa Tu Correo Hemos Enviado El password A Tu Correo';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}                                    
                                        
                                        
                                        
                                        
                                    }
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3></h3>
		<form method="POST" action="insertar.php">
			
		</form>
		<!-- fin insert-->
          <a class="btn btn-primary"href="index.php">Inicio</a>
	</center>
</body>
</html>
<?php  
	$contrasena = '1234';//password de la base de datos para conectarse
	$usuario = 'root';//usuario de la base de datos para conectarse
	$nombrebd= 'nota';//nombre de la base de datos a la que nos conectamos

	try {//se ejecuta la conexion con los parametros anteriores y la direccion de conexion
		$bd = new PDO(
			'mysql:host=localhost;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>
<?php
	//Conexion a la base de datos
	$conn = new mysqli('localhost', 'root', '','institucion');  // conn = conexion
	if ($conn->connect_error) {
		echo $error = $conn->connect_error;
	}
?>
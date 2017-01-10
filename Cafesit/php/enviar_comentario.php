<?php 
	session_start();

    require("conectar_database.php");

    $correo            = $_SESSION['correo'];
	$nombre_plato      = $_POST['plato'];
	$fecha_plato       = $_POST['fecha'];
	$comentario        = $_POST['comentario'];
	$numero_estrellas  = $_POST['estrellas'];

	$consulta = "INSERT INTO `VALORACION`(`CORREO`, `PLATO`, `FECHA`, `COMENTARIO`, `ESTRELLAS`) 
	    	     VALUES ('$correo','$nombre_plato','$fecha_plato','$comentario','$numero_estrellas');";

	mysql_query($consulta);
	
?> 
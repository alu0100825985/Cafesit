<?php 

    session_start();

    require("conectar_database.php");

    $nueva_contrasena  = $_POST['nueva_contrasena'];
    $identificador     = $_SESSION['id-usuario'];

    if(empty($nueva_contrasena) == false) {

    	$consulta = "UPDATE USUARIO
    			     SET CONTRASENA = '$nueva_contrasena' 
	    		     WHERE IDENTIFICADOR = '$identificador';"; 
    }
    else {
        echo "No ha introducido una nueva contraseña";
    }

	mysql_query($consulta);

?> 
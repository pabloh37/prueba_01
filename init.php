<?php
    define("FORMATS", ['image/png', 'image/jpg', 'image/jpeg']);
    define("MAX_FILE_SIZE", 20000000); 					// 2 MB
	
	define("BD", "pisos3_bd");			// va asociada a la clase
    require_once("../class/Database.php");
	
    require_once("../class/Usuario.php");
    require_once("../class/Piso.php");
    require_once("../class/Propietario.php");

    session_start();
	
    $conexion = Database::crearConexion();
?>
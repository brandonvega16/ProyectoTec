<?php
    require_once "../clases/conexion.php";
    require_once "../clases/adopcion.php";

    $obj = new Adopcion();

    $datos = array(
        $_POST['CURP'],
	    $_POST['nombre'],
	    $_POST['apPaterno'],
	    $_POST['apMaterno'],
	    $_POST['fechaNac'],
	    $_POST['genero'],
	    $_POST['color_ojos'],
	    $_POST['color_cabello'],
	    $_POST['etnia'],
	    $_POST['otros_rasgos'],
	    $_POST['status'],
	    $_POST['telefono'],
	    $_POST['email']
    );

    $obj->registro($datos);
?>
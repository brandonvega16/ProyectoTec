<?php
      require_once "../clases/conexion.php";
      require_once "../clases/adopcion.php";
  
      $obj = new Adopcion();

        
    $id = $_POST['idMenor'];
    $datos = array(
        $_POST['idMenor']
    );
    $obj->eliminar($datos);
?>
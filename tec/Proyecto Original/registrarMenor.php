<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['idMenor']) >= 1){
		
	    $idMenor = trim($_POST['idMenor']);
	    $CURP = trim($_POST['CURP']);
	    $nombre = trim($_POST['nombre']);
	    $apPaterno = trim($_POST['apPaterno']);
	    $apMaterno = trim($_POST['apMaterno']);
	    $fechaNac = trim($_POST['fechaNac']);
	    $genero = trim($_POST['genero']);
	    $color_ojos = trim($_POST['color_ojos']);
	    $color_cabello = trim($_POST['color_cabello']);
	    $etnia = trim($_POST['etnia']);
	    $otros_rasgos = trim($_POST['otros_rasgos']);
	    $status = trim($_POST['status']);
	    $telefono = trim($_POST['telefono']);
	    $email = trim($_POST['email']);

	    $consulta = "INSERT INTO menor (idMenor, CURP, nombre, apPaterno, apMaterno, fechaNac, genero, color_ojos, color_cabello,
	    etnia, otros_rasgos, status, telefono, email) VALUES ('$idMenor','$CURP','$nombre','$apPaterno','$apMaterno',
	    '$fechaNac','$genero','$color_ojos','$color_cabello','$etnia','$otros_rasgos','$status','$telefono','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Insersion exitosa!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
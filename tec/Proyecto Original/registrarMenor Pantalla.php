<!DOCTYPE html>
<html>
<head>
	<title>Registrar Menores</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
</head>
<body>
    <form method="post" id="frmDatos">
    	<h1>Registro de menores</h1>
         <label class="control-label" for="nome">idMenor</label>
    	<input type="text" name="idMenor">

         <label class="control-label" for="nome">CURP</label>
    	<input type="text" name="CURP">

        <label class="control-label" for="nome">nombre</label>
        <input type="text" name="nombre">

        <label class="control-label" for="nome">apPaterno</label>
        <input type="text" name="apPaterno">

        <label class="control-label" for="nome">apMaterno</label>
        <input type="text" name="apMaterno">

        <label class="control-label" for="nome">fechaNac</label>
        <input type="date" name="fechaNac">

        <label class="control-label" for="nome">genero</label>
        <input type="text" name="genero">

        <label class="control-label" for="nome">color_ojos</label>
        <input type="text" name="color_ojos">

        <label class="control-label" for="nome">color_cabello</label>
        <input type="text" name="color_cabello">

        <label class="control-label" for="nome">etnia</label>
        <input type="text" name="etnia">

        <label class="control-label" for="nome">otros_rasgos</label>
        <input type="text" name="otros_rasgos">

        <label class="control-label" for="nome">status</label>
        <input type="text" name="status">

        <label class="control-label" for="nome">telefono</label>
        <input type="text" name="telefono">

        <label class="control-label" for="nome">email</label>
        <input type="text" name="email">

        <input type="submit" id="register" name="register">
        <!--<br>
        <br>
        <button style="width: 250px; height: 50px;" type="button" id="btnRegistro" name="btnRegistro">Registrar</button>-->
    </form>
        <?php 
        include("registrarMenor.php");
        ?>

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/registro.js"></script>
    <script src="js/funciones.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>-->
</body>
</html>
<?php
require_once "conexion.php";
$c = new conectar();
$conexion = $c->conexion();
$sql = "SELECT * from menor";
$result = mysqli_query($conexion,$sql);
   
<?php

class conectar
{
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "DanielLara9.9";
    private $bd = "opmdb";

    public function conexion ()
    {
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
        return $conexion;
    }
}


?>

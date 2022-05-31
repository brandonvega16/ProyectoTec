<?php
class Adopcion
{
    function registro($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "INSERT INTO menor (CURP, nombre, apPaterno, apMaterno, fechaNac, genero, color_ojos, color_cabello,
	    etnia, otros_rasgos, status, telefono, email) 
        VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]','$datos[12]')";
        if(!mysqli_query($conexion, $sql))
        {   
            $result = "error";
        }
        else
        {
            $result = "ok";
        }
        print($result);
    }

    function actualizar($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "UPDATE menor SET CURP = '$datos[0]', nombre = '$datos[1]', apPaterno = '$datos[2]', apMaterno = '$datos[3]', fechaNac = '$datos[4]', 
        genero = '$datos[5]', color_ojos = '$datos[6]', color_cabello = '$datos[7]', etnia = '$datos[8]', otros_rasgos = '$datos[9]', 
        status = '$datos[10]', telefono = '$datos[11]', email = '$datos[12]'
        where idMenor = '$datos[13]' ";
        if(!mysqli_query($conexion, $sql))
        {   
            $result = "error";
        }
        else
        {
            $result = "ok";
        }
        print($result);
    }

    public function eliminar($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "DELETE FROM menor WHERE idMenor = '$datos[0]'";
        if(!mysqli_query($conexion, $sql))
        {   
            $result = "error";
        }
        else
        {
            $result = "ok";
        }
        print($result);
    }
}
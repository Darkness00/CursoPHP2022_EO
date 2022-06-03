<?php 

class Conexion
{

    public static function conectar()
    {
        # variables de conexion a la BD
        $host = "localhost";
        $usuario = "root";
        $pass = "";
        $baseDatos = "cursophp";

        $dns = 'mysql:host='.$host.';dbname='.$baseDatos;

        $link = new PDO($dns,$usuario, $pass);

        return $link;

    }

}


// $conect = Conexion::conectar();
// var_dump($conect);



?>
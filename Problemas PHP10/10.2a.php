<?php
    function retornarConexion()
    {
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");

        return $conexion;
    }
?>
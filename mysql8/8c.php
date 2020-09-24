<?php

$conexion = mysqli_connect("localhost","root","") or die ("problemas en la conexión");

mysqli_select_db($conexion,"sena")
 or die ("Problema en la selección de la Base de Datos");

mysqli_query($conexion,"insert into visitas(nombre,mail,pais,fecha) values 
 ('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[pais]','$_REQUEST[fecha]')") or die ("Problemas en el select ".mysql_error());


 mysqli_close($conexion);
 
 echo "Registro Ingresado";



// $mysqli = new mysqli("localhost","root","","sena");

// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }

// // Perform queries and print out affected rows
// $mysqli -> query("insert into visitas(nombre,mail,pais,fecha) 
// values 
// ('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[pais]','$_REQUEST[fecha]')");

?>

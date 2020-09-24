<?php

$mysqli = new mysqli("localhost","root","","sena");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform queries and print out affected rows
$mysqli -> query("insert into visitas(nombre,mail,pais,fecha) 
values 
('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[pais]','$_REQUEST[fecha]')");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> close();

?>

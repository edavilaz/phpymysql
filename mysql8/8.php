<?php

$mysqli = new mysqli("localhost","root","","sena");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform queries and print out affected rows
$mysqli -> query("insert into medicamentos(nombre,laboratorio,precio,cantidad) 
values 
('$_REQUEST[nombre]','$_REQUEST[laboratorio]','$_REQUEST[precio]','$_REQUEST[cantidad]')");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> close();

?>

<?php

$mysqli = new mysqli("localhost","root","","base1");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform queries and print out affected rows
$mysqli -> query("insert into alumnos(nombre,mail,codigocurso) values 
('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[codigocurso]')");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> close();

?>

<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
    mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
    $registros=mysqli_query($conexion, "select * from alumnos where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:".mysql_error());


    if ($reg=mysqli_fetch_array($registros))
        {
            $_SESSION['mail'] = $reg['mail'];

        }
    
    ?>
<html>
    <head>
        <title>Mail</title>
    </head>
    <body>
    
        <a href="10.1b.php">Ir a la tercer página donde se recuperarán 
        las variables de sesión si existen</a>
    </body>
</html> 

<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or
        die("Problemas en la conexion");

        mysqli_select_db($conexion,"bas") or
        die("Problemas en la selección de la base de datos");

        $registros=mysqli_query($conexion,"select cod from estudiantes where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:".mysqli_error());
        if ($reg=mysqli_fetch_array($registros))
        {
        mysqli_query($conexion,"delete from estudiantes where mail='$_REQUEST[mail]'") or
            die("Problemas en el select:".mysqli_error());
        echo "Se efectuó el borrado del estudiante con dicho mail.";
        }
        else
        {
        echo "No existe un estudiante con ese mail.";
        }
        mysqli_close($conexion);
        ?>
    </body>
</html> 

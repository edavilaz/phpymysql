<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or 
        die("Problemas en la conexion");

        mysqli_select_db($conexion,"base1") or
        die("Problemas en la selección de la base de datos");

        $registros=mysqli_query($conexion,"select codigo,nombre,codigocurso
                            from alumnos where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:".mysql_error());

        if ($reg=mysqli_fetch_array($registros))
        {
        echo "Nombre:".$reg['nombre']."<br>";
        echo "Curso:";
        switch ($reg['codigocurso']) {
            case 1:echo "PHP";
                    break;
            case 2:echo "ASP";
                    break;
            case 3:echo "JSP";
                    break;
        }
        }
        else
        {
        echo "No existe un estudiante con ese mail.";
        }
        mysqli_close($conexion);
        ?>
</body>
</html> 

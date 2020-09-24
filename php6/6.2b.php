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

        $registros=mysqli_query($conexion,"select cod,nom,codcur
                            from estudiantes where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:".mysqli_error());

        if ($reg=mysqli_fetch_array($registros))
        {
        echo "Nombre:".$reg['nom']."<br>";
        echo "Curso:";
        switch ($reg['codcur']) {
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
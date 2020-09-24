<html>
    <head>
        <title>Borrar Curso</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or
        die("Problemas en la conexion");

        mysqli_select_db($conexion,"base1") or
        die("Problemas en la selección de la base de datos");

        $registros=mysqli_query($conexion,"select * from cursos where nombre='$_REQUEST[nombre]'") or
        die("Problemas en el select:".mysqli_error());
        if ($reg=mysqli_fetch_array($registros))
        {
        mysqli_query($conexion,"delete from cursos where nombre='$_REQUEST[nombre]'") or
            die("Problemas en el select:".mysqli_error());
        echo "Se efectuó el borrado del curso.";
        }
        else
        {
        echo "No existe ese curso.";
        }
        mysqli_close($conexion);
        ?>
    </body>
</html> 

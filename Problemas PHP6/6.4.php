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

        mysqli_query($conexion,"delete from cursos") or 
        //cambiar por alumnos para borrar
        die("Problemas en el select:".mysqli_error());
        echo "Se efectuó el borrado de todos los cursos.";
        mysqli_close($conexion);
        ?>
    </body>
</html>
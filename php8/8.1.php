<html>
    <body>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion, "update alumnos
                            set codigocurso=$_REQUEST[codigocurso]
                            where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:".mysqli_error());
        echo "El curso fue modificado con exito";
        ?>
    </body>
</html>
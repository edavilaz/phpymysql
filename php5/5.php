<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion = mysqli_connect("localhost","root","") 
        or die("Problemas en la conexion");

        mysqli_select_db($conexion,"base1") or
        die("Problemas en la seleccion de la base de datos");
        
        mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso) values 
        ('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[codigocurso]')") or die("Problemas en el select".mysql_error());
        
        mysqli_close($conexion);
        echo "El alumno fue dado de alta.";
        ?>
    </body>
</html>

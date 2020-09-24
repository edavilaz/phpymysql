<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
    <?php
        $conexion=mysqli_connect("localhost","root","") 
        or  die("Problemas en la conexion");

        mysqli_select_db($conexion,"base1") 
        or  die("Problemas en la selección de la base de datos");

        $registros=mysqli_query($conexion, "select codigo,nombre from cursos") or
        die ("Problemas en el select: " .mysqli_error());

        while ($reg=mysqli_fetch_array($registros))
        {
        echo "Codigo:".$reg['codigo']."<br>";
        echo "Nombre:".$reg['nombre']."<br>";
        
        echo "<br>";
        echo "<hr>";
        }
        mysqli_close($conexion);
        ?>
</body>
</html>
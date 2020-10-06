<html>
    <head>
        <title>Conexión</title>
    </head>
    <body>
        <?php
            require_once("10.2a.php");
            
            $conexion = retornarConexion();
            
            $registros=mysqli_query($conexion, "select * from alumnos") or die("Problemas en el select:".mysqli_error());
        
            while ($reg=mysqli_fetch_array($registros))
            {
            echo "Codigo:".$reg['codigo']."<br>";
            echo "Nombre:".$reg['nombre']."<br>";
            echo "Mail:".$reg['mail']."<br>";
            echo "Curso:".$reg['codigocurso']."<br>";
            echo "<hr>";
            }
        mysqli_close($conexion);
        ?>
    </body>
</html> 

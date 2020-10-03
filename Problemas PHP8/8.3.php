<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion,"select alumnos.nombre, cursos.nom,alumnos.codigocurso from alumnos 
                                inner join cursos on cursos.cod=alumnos.codigocurso 
                                where cursos.cod = $_REQUEST[curso]") or die ("Problemas en el select:".mysqli_error());
        
        while ($reg=mysqli_fetch_array($registros))
        {
            echo "Curso: ".$reg['nom']."<br>";        

            echo "Nombre:".$reg['nombre']."<br>";
            
        }
        
        mysqli_close($conexion);    

        ?>
</body>
</html>

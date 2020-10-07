<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion,"select count(*) as cantidad,  
                                cur.nom, cur.cod from alumnos as alu
                            inner join cursos as cur on cur.cod=alu.codigocurso
                            group by alu.codigocurso") or die("Problemas en el select:".mysqli_error());
        $registros2=mysqli_query($conexion,"select * from alumnos") or die("Problemas en el select:".mysqli_error());
                            
                            
                            while ($reg=mysqli_fetch_array($registros))
                            {
                                echo "Nombre del curso:".$reg['nom']."<br>";
                                echo "Cantidad de inscritos:".$reg['cantidad']."<br>";
                                echo "Nombre alumno: ";
                                
                                while ($regalu=mysqli_fetch_array($registros2))    
                                {   
                                    if ($reg['cod']==$regalu['codigocurso'])
                                     {
                                        echo $regalu['nombre']. " - ";
                                     }
                                    
                                }
                                    echo "<hr>";
                            }
        mysqli_close($conexion);
        ?>
    </body>
</html> 

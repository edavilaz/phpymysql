    <?php
    if (isset($_REQUEST['pos']))
    $inicio=$_REQUEST['pos'];
    else
    $inicio=0;
    ?>
<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion, "select alu.codigo as 
                            codigo,nombre,mail,codigocurso, 
                            nom from alumnos as alu
                            inner join cursos as cur on cur.cod=alu.codigocurso
                            limit $inicio,2") or die("Problemas en el select:".mysqli_error());
        $impresos=0;
        while ($reg=mysqli_fetch_array($registros))
        {
        $impresos++;
        echo "Codigo:".$reg['codigo']."<br>";
        echo "Nombre:".$reg['nombre']."<br>";
        echo "Mail:".$reg['mail']."<br>";
        echo "curso:".$reg['nom']."<br>";
        echo "<hr>";
        }
        mysqli_close($conexion);
        if ($inicio==0)
        echo "anteriores ";
        else
        {
        $anterior=$inicio-2;
        echo "<a href=\"pagina1.php?pos=$anterior\">Anteriores </a>";
        }
        if ($impresos==2)
        {
        $proximo=$inicio+2;
        echo "<a href=\"pagina1.php?pos=$proximo\">Siguientes</a>";
        }
        else
        echo "siguientes";
        ?>
    </body>
</html> 

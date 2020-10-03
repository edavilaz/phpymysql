<?php
    if (isset($_REQUEST['pos']))
    $inicio=$_REQUEST['pos'];
    else
    $inicio=0;
    ?>
<html>
    <head>
        <title>Problema 8.4</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion, "select cod, nom from cursos limit $inicio,3") or 
        die("Problemas en el select:".mysqli_error());
        $impresos=0;
        while ($reg=mysqli_fetch_array($registros))
        {
        $impresos++;
        echo "código".$reg['cod']."<br>";
        echo "curso:".$reg['nom']."<br>";
        echo "<hr>";
        }
        mysqli_close($conexion);
        if ($inicio==0)
        echo "anteriores ";
        else
        {
        $anterior=$inicio-3;
        echo "<a href=\"pagina1.php?pos=$anterior\">Anteriores </a>";
        }
        if ($impresos==3)
        {
        $proximo=$inicio+3;
        echo "<a href=\"pagina1.php?pos=$proximo\">Siguientes</a>";
        }
        else
        echo "siguientes";
        ?>
    </body>
</html> 

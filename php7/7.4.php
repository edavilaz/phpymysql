<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion, "select count(*) as cantidad 
                                from alumnos") or die("Problemas en el select:".mysqli_error());
        $reg=mysqli_fetch_array($registros);
        echo "La cantidad de aprendices inscritos son :".$reg['cantidad'];
        ?>
</body>
</html>

<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion, "select * from cursos where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select:".mysqli_error());
        
        if ($reg=mysqli_fetch_array($registros))
            {
            ?>
            <form action="7.1a.php" method="post">
            Ingrese nuevo nombre:
            <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
            <br>
            <input type="hidden" name="nombreviejo" value="<?php echo $reg['nombre'] ?>">
            <input type="submit" value="Modificar">
            </form>
            <?php
            }
        else
            echo "No existe dicho codigo";
        ?>
    </body>
</html>

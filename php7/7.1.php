<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion, "select * from alumnos where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:".mysql_error());
        
        if ($reg=mysqli_fetch_array($registros))
            {
            ?>
            <form action="7.1a.php" method="post">
            Ingrese nuevo mail:
            <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
            <br>
            <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
            <input type="submit" value="Modificar">
            </form>
            <?php
            }
        else
            echo "No existe alumno con dicho mail";
        ?>
    </body>
</html>

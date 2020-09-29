<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion,"select * from alumnos
                            where codigo='$_REQUEST[codigo]'") or die("Problemas en el select:".mysqli_error());
                            
            if ($reg=mysqli_fetch_array($registros))
                 {
                  ?>
                    <form action="8.1a.php" method="post">
                    
                    <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']?> ">
                    
                    Ingrese nuevo Nombre:
                    <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
                    <br>
                    <input type="hidden" name="nombreviejo" value="<?php echo $reg['nombre'] ?>">
                    
                    Ingrese nuevo mail:
                    <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
                    <br>
                    <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
                    
                    Ingrese nuevo codigo de curso:
                    <input type="text" name="codigocursonuevo" value="<?php echo $reg['codigocurso'] ?>">
                    <br>
                    <input type="hidden" name="codigocursoviejo" value="<?php echo $reg['codigocurso'] ?>">
                    <input type="submit" value="Modificar">
                    </form>
            <?php
    }
    else
    echo "No existe aprendiz con dicho codigo";
    ?>
</body>
</html>
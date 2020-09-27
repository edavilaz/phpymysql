<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion,"select * from alumnos
                            where mail='$_REQUEST[mail]'") or die("Problemas en el select:".mysqli_error());
        if ($regalu=mysqli_fetch_array($registros))
        {
        ?>
            <form action="8.1.php" method="post">
            <input type="hidden" name="mailviejo" value="<?php 
            echo $regalu['mail'] ?>">
            <select name="codigocurso">
            <?php
            $registros=mysqli_query($conexion, "select * from cursos") or die("Problemas en el select:".mysqli_error());
            while ($reg=mysqli_fetch_array($registros))
            {
            if ($regalu['codigocurso']==$reg['cod'])
                echo "<option value=\"$reg[cod]\" selected>$reg[nom]</option>";
            else
                echo "<option value=\"$reg[cod]\">$reg[nom]</option>";
            }
            ?>
            </select>
            <br>
            <input type="submit" value="Modificar">
            </form>
    <?php
    }
    else
    echo "No existe aprendiz con dicho mail";
    ?>
</body>
</html>

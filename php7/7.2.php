<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <form action="7.2a.php" method="post">
            Ingrese nombre:
            <input type="text" name="nombre"><br>
            Ingrese mail:
            <input type="text" name="mail"><br>
            Seleccione el curso:
            <select name="codigocurso">
                <?php
                    $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
                    mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
                    $registros=mysqli_query($conexion, "select codigo,nombre from cursos") or
                    die("Problemas en el select:".mysqli_error());
                        while ($reg=mysqli_fetch_array($registros))
                        {
                            echo "<option value=\"$reg[codigo]\">$reg[nombre]</option>";
                        }
                ?>
            </select>
            <br>    
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>

<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
        mysqli_select_db($conexion,"base1") or die("Problemas en la selección de la base de datos");
        $registros=mysqli_query($conexion, "update alumnos set nombre='$_REQUEST[nombrenuevo]', mail='$_REQUEST[mailnuevo]', codigocurso='$_REQUEST[codigocursonuevo]'   
            where codigo='$_REQUEST[codigo]'") or die("Problemas en el select:".mysqli_error());
        echo "El codigo fue modificado con éxito";
        ?>
    </body>
</html>

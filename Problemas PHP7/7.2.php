<!doctype html>
<html lang='es'>
    <head>
<!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
<title>insert</title>
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
                        if ($reg=mysqli_fetch_array($registros))
                        {
                            echo "<select name='codigocurso'>
                            </select><option value=\"$reg[codigo]\">$reg[nombre]</option>;
                            <option value=\$reg[codigo]\">$reg[nombre]</option>;
                            <option value=\"$reg[codigo]\">$reg[nombre]</option>";
                                                        
                        }
                        else{
                            echo "El curso no existe";
                        }
                ?>
            </select>
            <br>    
            <input type="submit" value="Registrar">
        </form>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
<!-- Optional JavaScript -->
    <script src=
></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
</html>
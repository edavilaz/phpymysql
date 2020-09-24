    <?php
            $conexion = mysqli_connect("localhost","root","") or die ("problemas en la conexión");
            mysqli_select_db($conexion,"sena")
            or die ("Problema en la selección de la Base de Datos");
            mysqli_query($conexion,"insert into usuarios(nombre,clave) values  ('$_REQUEST[nombre]','$_REQUEST[clave]')") or die ("Problemas en el select ".mysql_error());
            
            echo "Usuario Creado";
            mysqli_close($conexion);
            
            echo "<br>";
            echo "El usuario ingresado es: ". $_REQUEST['nombre'];
            echo "<br>";
            echo "La clave ingresada es: ".$_REQUEST['clave'];

    ?>


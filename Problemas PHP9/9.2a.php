<?php
  
    setcookie("usuario",$_REQUEST['usuario'],time()+60*60*24*365,"/");

?>
<html>
    <head>
        <title>Usuario</title>
    </head>
    <body>
        Se creó la cookie.
    <br>
        <a href="9.2.php">Ir a la otra página</a>
    </body>
</html>

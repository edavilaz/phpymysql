<?php
setcookie("noticias", $_REQUEST['radio'], time() + (60 * 60 * 24 * 365), "/");
?>
<html>

    <head>
        <title>Periodico</title>
    </head>

    <body>
        <h2>Se configuró correctamente</h2>
        <a href="9.3.php">Ir a la otra página</a>
    </body>

</html>
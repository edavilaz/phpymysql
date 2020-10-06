<?php
    session_start();
    if (isset($_SESSION['mail']))
    
        echo "El aprendiz tiene el siguiente mail recuperado de la variable de sesión:".$_SESSION['mail'];
    
    else
    
        echo "El usuario no tiene un mail registrado.";
    


    ?>

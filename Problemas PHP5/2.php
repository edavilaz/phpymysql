<?php
function verificar($p1,$p2){
    if ($p1 != $p2)
    {
        echo " La clave Ingresada no es la misma...";
    }  
}

$p1 = $_REQUEST ['pass1'];
$p2 = $_REQUEST ['pass2'];

verificar($p1,$p2);
?>
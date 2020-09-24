<?php

$ar = fopen("pedidos.txt","r") or die ("no se pudo abrir el archivo");

while (!feof($ar))
{
    $linea = fgets($ar);
    $lineasalto = nl2br($linea);
    echo $lineasalto;

}
fclose ($ar);

?>
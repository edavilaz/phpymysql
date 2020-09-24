<?php

$venta = $_REQUEST['venta'];
$marca = ($_REQUEST['marca']);
$iva = ($venta * 0.19);


if ($venta > 2000 and $marca == "nosy")
{
    $total = ($venta - ($venta * 0.15));
}
elseif ($venta >2000 and $marca !="nosy")
{
    $total = ($venta - ($venta * 0.10)); 
}
else
{
    $total = $venta;
}

$totalconiva = ($total + ($total * 0.19));
echo " El total a pagar es: ". $totalconiva;

?>
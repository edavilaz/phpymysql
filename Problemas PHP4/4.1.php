<?php

$venta = $_REQUEST['venta'];
$iva = $venta*0.16;
$total = $venta + $iva; 
$cantidad = $_REQUEST['cambio'];
$cambio = $cantidad - $total;

echo "<p> El monto de la venta es: $venta  </p>";
echo "<p> El iva del 16% es: $iva </p>";
echo "<p> El Total de la venta es: $total </p>";
echo "<p> El monto dado por el cliente es: $cantidad</p>";
echo "<p> El cambio es: $cambio</p>"


?>
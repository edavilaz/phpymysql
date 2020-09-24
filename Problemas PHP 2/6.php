<?php

$venta = $_REQUEST['venta'];

$bolita = $_REQUEST['bolita'];

switch ($bolita){
    Case 'Blanco':
        echo "La Bola Blanca no tiene descuento, debe pagar: ".$venta;
        break;
    Case 'Verde':
        echo "La Bola Verde tiene un descuento de 10% y debe pagar: ".($venta - ($venta*0.10));
        break;
    Case 'Amarillo':
        echo "La Bola Amarilla tiene 25% de descuento y debe pagar: ".($venta - ($venta*0.25));
        break;
    Case 'Azul':
        echo "La Bola Azul tiene un descuento de 50% y debe pagar: ". ($venta - ($venta*0.50));
        break;
    Case 'Roja':
        echo "Le tocó la Bola Roja, no debe pagar nada, Feliz Día!!!";
        break;
    Default:
        echo "Algo salió mal...";
        break;
}


?>
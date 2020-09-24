<?php

$venta = $_REQUEST['venta'];
$numero = rand(50,100);

if ($numero < 74)
    {
        $resultado = ($venta - ($venta * 0.15) );
        echo "
        <h1> El valor a pagar es: $resultado </h1>";
        echo "<br>";
        echo "<h1> El monto de descuento fue: ".($venta*0.15)."</h1>" ;
    }
else
    {
        $resultado =($venta -($venta * 0.20));
        echo "<h1> El valor a pagar es: ".$resultado."</h1>";      
        echo "<br>";
        echo "<h1> El monto de descuento fue: ".($venta*0.20)."</h1>";      

    }

    ?>
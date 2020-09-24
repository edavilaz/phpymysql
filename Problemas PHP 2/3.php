<?php

$prom = 0;
$n = rand (1,100);

for ($i=1;$i<=$n;$i++)

{
    $notas = rand (50,100);
    $prom = $prom + $notas;
    
    
}

echo "El Promedio de $n alumnos es: ".$prom/$n;
?>
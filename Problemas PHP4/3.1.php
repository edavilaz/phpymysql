<?php

$total = 0;
$reprobados =0;


foreach ($_REQUEST['nota'] as $nota => $value) {
    $total++;
    if ($value <70 )
    {
        $reprobados++; 
    }
    
}
$porc = ($reprobados / $total) *100;
echo "El total de alumnos es:  ".$total. "<br>";
echo "Los Alumno Reprobados con menos de 70 son ".$reprobados. "<br>";
echo " El porcentaje es:  ".$porc;


?>
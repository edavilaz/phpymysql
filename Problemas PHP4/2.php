<?php

$menosde50 = 0;
$m50m80 =0;
$igual70m80 = 0;
$mayor80 = 0;

foreach ($_REQUEST['nota'] as $nota => $value) {
    if ($value <50 )
    {
        $menosde50++; 
    }
    elseif ($value >50 and $value <80)
    {
        $m50m80++;
    }
    elseif ($value =70 and $value <80)
    {
        $igual70m80++;
    }
    else
    {
        $mayor80++;
    }
}
echo "Alumnos con menos de 50 son ".$menosde50. "<br>";
echo "Alumnos con más de 50 y menos de 80 son ".$m50m80. "<br>";
echo "Alumnos Igual a 70 o menos de 80 son  ".$igual70m80. "<br>";
echo "Alumnos con más de 80 son  ".$mayor80. "<br>";


?>
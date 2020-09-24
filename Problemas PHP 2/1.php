<?php
$prom = 0;
for ($i=1; $i<=7;$i++)
{
    $n = rand (1,100);
    $prom = $prom + $n;
}
$prom = $prom/7;
echo "El promedio es $prom";

?>
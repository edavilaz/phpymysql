
<?php

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];


// if abreviado
echo ($num1 > $num2) ? "<h2>$num2 <br> $num1</h2>": "<h2>$num1 <br> $num2</h2>"; 

if ($num1 == $num2)
{
    echo "<h2> Son Iguales </h2>"; 
}
?>


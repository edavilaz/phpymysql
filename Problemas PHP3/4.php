<?php

if ($_REQUEST['sueldo'] == "1")

{
    echo $_REQUEST['nombre']." Recibes un sueldo de 1 a 1000";
}
elseif ($_REQUEST['sueldo'] == "2")

{
    echo $_REQUEST['nombre']." Recibes un sueldo de 1001 a 3000";
}

else 
{
    echo $_REQUEST['nombre']." Recibes un sueldo mayor a 3000";
}
?>

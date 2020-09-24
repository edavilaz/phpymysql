<?php

If ($_REQUEST['estudios']=="no")
{
    echo "Hola ".$_REQUEST['nombre']." No tienes Estudios";
}
elseif ($_REQUEST['nombre']=="primaria") 
{
    echo "Hola ".$_REQUEST['nombre']." Tienes Estudios Primarios";
}
else
{
    echo "Hola ".$_REQUEST['nombre']." Tienes Estudios Secundarios";
}
?>

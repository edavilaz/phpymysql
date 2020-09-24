<?php

if ($_REQUEST['edad']>= 18)
{
    echo "Hola ".$_REQUEST['nombre'].", eres Mayor de edad";
}
else
{
    echo "Hola ". $_REQUEST['nombre'].", eres Menor de edad";
}


?>
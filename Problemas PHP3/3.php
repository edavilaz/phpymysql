<?php

if (isset($_REQUEST['futbol']))

{
    echo $_REQUEST['nombre']." Te gusta el Futbol";
}
elseif (isset($_REQUEST['basket']))

{
    echo $_REQUEST['nombre']." Te gusta el Basket";
} 

elseif (isset($_REQUEST['Tennis']))

{
    echo $_REQUEST['nombre']." Te gusta el Tennis";
}

else

{
    echo $_REQUEST['nombre']." Te gusta el Voley";
}

?>
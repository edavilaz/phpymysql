<?php
$ar = fopen("pedidos.txt","a") or die ("problemas con la creación");
fputs ($ar,$_REQUEST['nombre']);
fputs ($ar,"\n");
fputs ($ar,$_REQUEST['direccion']);
fputs ($ar,"\n");

if (isset($_REQUEST['jqueso']))
{
fputs ($ar,'Jamon y Queso');
fputs ($ar,"\n");
fputs ($ar,$_REQUEST['jquesocan']);
fputs ($ar,"\n");
}
if (isset($_REQUEST['napolitana']))
{
fputs ($ar,'Napolitana');
fputs ($ar,"\n");
fputs ($ar,$_REQUEST['napolitanacan']);
fputs ($ar,"\n");
}
if (isset($_REQUEST['mozzarella']))
    {
    fputs ($ar,'Mozzarella');
    fputs ($ar,"\n");
    fputs ($ar,$_REQUEST['mozzarrellacan']);
    fputs ($ar,"\n");
    }

fputs ($ar,
"___________________________________________"
);
fputs ($ar,"\n");
fclose($ar);
echo "Pedido Ingresado";
echo "<br>";
echo "<a href='4.4.php'> Ver Pedidos </a>";




?>
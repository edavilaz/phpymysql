<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- refrescar la pagina con otra -->
    <!-- <meta http-equiv="refresh" content="120; url=https://sena.territorio.la/cms/index.php"> -->
    <title>Document</title>
</head>
<body>
    <?php 
    $num=rand(1,100);
    if ($num <=50)
    {
        echo "El número es $num, y es menor que 50";
    }
    else
    {
        echo "El número es $num, y es mayor que 50";
    }
        
    ?>
</body>
</html>
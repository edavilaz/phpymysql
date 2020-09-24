<!-- <html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            for($f=1;$f<=100;$f++)
            {
                echo $f;
                echo "<br>";
            }
        ?>
    </body>
</html> -->
<!-- <html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $valor=rand(1,100);
            $inicio=1;
            while($inicio<=$valor)
            {
                echo $inicio;
                echo "<br>";
                $inicio++;
            }
        ?>
    </body>
</html> -->

<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $valor=rand(1,10);
            $inicio=1;
            do
            {
                echo 'La variable $inicio vale: ';
                echo $inicio;
                echo "<br>";
                
                $inicio++;
            }
            while($inicio<=$valor);
        ?>
    </body>
</html>


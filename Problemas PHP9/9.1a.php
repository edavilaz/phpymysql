<!doctype html>
<html lang='es'>
    <head>
<!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
<title>Titulo</title>
    </head>
    <body>
    <body>
        <?php
        
        copy($_FILES['foto1']['tmp_name'],$_FILES['foto1']['name']);
                
        copy($_FILES['foto2']['tmp_name'],$_FILES['foto2']['name']);
        
        copy($_FILES['foto3']['tmp_name'],$_FILES['foto3']['name']);
        echo "Las fotos se registraron en el servidor.<br>";
        
        $nom1=$_FILES['foto1']['name'];
        $nom2=$_FILES['foto2']['name'];
        $nom3=$_FILES['foto3']['name'];

        echo "<img src=\"$nom1\">";
        echo "<img src=\"$nom2\">";
        echo "<img src=\"$nom3\">";
        
               
        
        
        ?>
    </body> 
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
<!-- Optional JavaScript -->
    <script src=
></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
</html>
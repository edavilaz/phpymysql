<!doctype html>
<html lang='es'>
    <head>
<!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
<title>Pedido Pizza</title>
    </head>
    <body>
        <div class="container">
        
            <form class="form-check-input border border-success m-5 p-4" action="4.31.php" method="POST">
            <label for="nombre" class="text-primary">Nombre:</label>
            
            <input class="input-group-text mb-1" type="text" name="nombre" id="">
            <label for="direccion" class="text-primary">Dirección:</label>
            
            <input class="input-group-text mb-1" type="text" name="direccion" id="">
            <br>
            <label for="jqueso" class="text-primary">Jamon Queso</label>
            
            <input class="form-control-input" type="checkbox" name="jqueso">
            <input class="input-group-text mb-1" type="number" name="jquesocan">
            <br>
            
            <label for="napolitana" class="text-primary">Napolitana</label>
            
            <input class="form-control-input" type="checkbox" name="napolitana" id="">
            <input class="input-group-text mb-1" type="number" name="napolitanacan" id="">
            <br>
            <label for="mozzarella" class="text-primary">Mozarrella</label>
            
            <input  class="form-control-input" type="checkbox" name="mozzarella" id="">
            <input class="input-group-text mb-1" type="number" name="mozzarellacan" id="">
            <br>
            
            <input class="btn btn-danger btn-block" type="submit" value="Confirmar Pedido">
            </form>
        
        </div>






<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
<!-- Optional JavaScript -->
    <script src=
></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
</html>
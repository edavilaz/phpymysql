 <!doctype html>
 <html lang='es'>
     <head>
         <!-- Required meta tags -->
         <meta charset='utf-8'>
         <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
         <!-- Bootstrap CSS -->
         <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
         <title>control select</title>
     </head>
     <body> 
        <div class="container">   
            <form action="ejercicio 3.4a.php" method="post"> 
                Ingrese primer valor: 
            <input type="text" name="valor1" class="input-group-text"> 
            <br> 
                Ingrese segundo valor: 
            <input type="text" name="valor2" class="input-group-text"> 
            <br> 
            <select name="operacion" class="custom-select-sm "> 
                <option value="suma">sumar</option> 
                <option value="resta">restar</option> 
            </select> 
            <br> 
            <input type="submit" name="operar" class="btn btn-primary mt-2"> 
            </form>  
        </div>
         
 
 
 
 
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src='https://code.jquery.com/jquery-3.5.1.min.js' integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
 <!-- Optional JavaScript -->
 
 
 <!--Popper-->
 <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
 <!--bootstrap-->
 <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' integrity='sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI' crossorigin='anonymous'></script>
     </body>
 </html>
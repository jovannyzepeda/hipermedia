<?php

if(isset($_POST['email'])) {
$to      = 'pasteleria@lasdelicias.com';
$subject = 'Cotizacion de productos';
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['selproduct']) ||
!isset($_POST['especificaciones'])) {
echo "<b>Ocurrió un problema en el envio le pedimos disculpas. </b><br/>";
die();
}

$message  = "Nombre: " . $_POST['nombre'] . "\n";
$message .="Telefono:".$_POST['telefono'] ."\n";
$message .="Domicilio: ".$_POST['domicilio']."\n";
$message .= "correo: " . $_POST['email'] . "\n";
$message .= "Producto cotizado: " . $_POST['selproduct'] . "\n";
$message .= "Comentarios: " . $_POST['especificaciones'] . "\n\n";

$headers = 'From: '.$_POST['email']."\r\n".
'Reply-To: '.$_POST['email']."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($to, $subject, $message, $headers);

}

?>
        <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="fonts/glyphicons-halflings-regular.woff" rel="wpff">
    <link href="fonts/glyphicons-halflings-regular.ttf" rel="ttf">
    <link rel="icon" href="favicon.ico">

    <title>Pasteleria las delicias</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
   <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Pasteleria las delicias</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">INICIO</a></li>
                <li><a href="nosotros.html">NOSOTROS</a></li>
                <li><a href="contacto.html">CONTACTO</a></li>
                <li><a href="productos.php">NUESTROS PRODUCTOS</a></li>
                <li><a href="sucursales.php">SUCURSALES</a></li>
                <li><a href="cotizacion.php">COTIZACIONES</a></li>
                <li><a href="carrito.php">CARRITO</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="featurette-divider">
    <article class="mensaje"><h3> Gracias por su preferencia ,su cotizacion ha sido registrada</h3></article>
    <hr class="featurette-divider">
    <section class="mini"><br>
        <section class="interna">
        <?php 
          $con=mysqli_connect("localhost","root","cruel1293","pasteleria");
          if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $result = mysqli_query($con,"SELECT * FROM producto ORDER BY RAND() LIMIT 7");

          while($row = mysqli_fetch_array($result)) {?>
             <a href="detalle.php?resultado=<?php echo $row['idproducto'] ?>"> <img class="img-circle" src="<?php echo $row['imagen']?>" alt="Generic placeholder image" ></a>
              <?php } ?>
          
          </section>
          <br>
          </section>
          <hr class="featurette-divider">
      <footer>
        <p class="pull-right"><a href="#">Ir al inicio</a></p>
        <p>&copy;Pasteleria las Delicias &middot;</p>
      </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
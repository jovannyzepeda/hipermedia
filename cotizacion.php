<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="fonts/glyphicons-halflings-regular.woff" rel="wpff">
    <link href="fonts/glyphicons-halflings-regular.ttf" rel="ttf">
    <link rel="icon" href="imagenes/favicon.ico">
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
  <section id="formulario">
  <form role="form" action="cotizar.php" method="post" class="formula">
  <div class="form-group">
  <label for="nombre"> Nombre</label>
  <br>
      <input type="text" class="txt" name="nombre" placeholder="Jose Perez" required="required"/>
    <br>
    <label for="tel">Telefono</label>
  <br>
    <input type="telefono" class="txt" name="telefono" placeholder="36 88 88 00" required="required"/>
    <br>
    <label for="domicilio">Domicilio</label>
  <br>
      <input type="text" class="txt" name="domicilio" placeholder="La rosas no.3" required="required"/>
    <br>
    <label for="inputEmail3">Email</label>
    <br>
      <input type="email" class="txt" name="email" placeholder="nombre@hotmail.com" required="required"/>
  <br>
  <br>
    <select name="selproduct" id="selproduct" value="producto">
      <option value="0" name="producto">Selecciona un producto de tu gusto</option>
      <?php
          $con=mysqli_connect("localhost","root","cruel1293","pasteleria");
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
          $result = mysqli_query($con,"SELECT * FROM producto ORDER BY nombre_producto");
          while($row = mysqli_fetch_array($result)) {?>
          <option id="<?php echo $row['idproducto']?>"value="<?php echo $row['nombre_producto']?>"><?php echo $row['nombre_producto']?></option>
       <?php }?>
    </select>
    <br>
    <label for="especificacion" >Comentarios</label>
    <br>
  	<textarea rows="8" cols="50" name="especificaciones"></textarea>
    <br>
    <div class="col-sm-offset-2 col-sm-10">
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <br>
    <input type="submit" value="Solicitar Cotizacion">
  	<input type="reset" name="borrado" value="Borrar"/>
  	<br>
    </div>
    </div>
    </div>
    </div>
</form>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr class="featurette-divider">
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/frape.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Antojo...</h2>
          <p>ma;ana tarde o noche te invitamos a disfrutar de nuestros sabrosos frapes.</p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/empanada.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Hambre...</h2>
          <p>Olvidate de ella con este paquete de empanadas Argentinas rellenas de diversa variedad de guisados.</p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/pastelillo.jpeg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Antojambre...</h2>
          <p>Para esos momentos prueba los deliciosos pastelitos de tres chocolates perfecto para hacerte el dia.</p>
        </div>
      </div>

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

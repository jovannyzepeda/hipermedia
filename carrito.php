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
      <?php 
          $con=mysqli_connect("localhost","root","cruel1293","pasteleria");
          if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $result = mysqli_query($con,"SELECT * FROM auxiliar");

          while($row = mysqli_fetch_array($result)) {?>
          <section id="<?php echo $row['idproducto']?>" class="carshop">
          <div class="row">
          <div class="col-md-2">
          <?php echo $row['nombre']?>
          </div>
          <div class="col-md-1">
          <?php echo $row['cantidad']?>
          </div>
          <div class="col-md-1">
          <?php echo $row['precio']?>
          </div>
          <div class="col-md-1">
          <?php echo $row['totalproducto']?>
          </div>
          <div class="col-md-1">
          <p>borrar</p>
          </div>
          <div class="col-md-1">
          <a href="carrito.php"><button type="button" class="danger" id="<?php echo $row['idproducto']?>"onclick="eliminar(this.id)"><span class="glyphicon glyphicon-ban-circle"></span></button></a>
          </div>
          </div>
          <br>
             </section>
              <?php } 

              ?>
              <section class="carshop">
              <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-2">Total a pagar: </div>
      <div class="col-md-1"> 
      <?php
      $result = mysqli_query($con,"SELECT SUM(totalproducto) FROM auxiliar");
      while($row = mysqli_fetch_array($result)){
      echo "$". $row['SUM(totalproducto)'];
      }
      ?>
      </div>
    </div>
    <br><br>
    
    <form action="compras.php" method="post" class="labe">
    <div class="col-md-1">
    <label for="nombre" class="labe">Nombre</label>
    </div>
    <div class="col-md-3">
    <input type="text" required="required" placeholder="nombre de cliente" id="nombre" name ="nombre"/>
    </div>

    <div class="col-md-1">
    <label for="telefono" class="labe">Telefono</label>
    </div>
    <div class="col-md-3">
    <input type="telefono" required="required" placeholder="36 88 88 00" id="tel" name ="telefono"/>
    </div>
    <input type="submit" value="Realizar pedido"/>

   <br>
   <br>
   <div class="col-md-1">
   <label for="domicilio" class="labe">Domicilio</label></div>
   <div class="col-md-3">
   <input type="text" required="required" placeholder="Las rosas no.3" id="domicilio" name ="domicilio"/>
   </div>
   <div class="col-md-1">
   <label for="direccion" class="labe">Correo</label>
   </div>
   <div class="col-md-3">
   <input type="email" required="required" placeholder="direccion de entrega" id="direccion" name ="email"/>
   </div>
    </form>
    
    </section>
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

    </div>
    <script type="text/javascript">
    function eliminar(id){
        var info = "id="+id;
      $.ajax({
        url: 'actualizarcarrito.php',
        type: 'POST',
        data: info
      });
    }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
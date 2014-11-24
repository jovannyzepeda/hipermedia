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
    <script type="text/javascript" src="js/ajax.js"></script>
    <title>Pasteleria las delicias</title>
   
    <script href="js/jquery.min.js"type="text/javascript"></script>   
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
  <br><br>
        <section class="mini"><br>
        <section class="interna">
        <?php
        $var=$_GET['resultado'];
        $con=mysqli_connect("localhost","root","cruel1293","pasteleria");
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $result = mysqli_query($con,"SELECT * FROM producto where idproducto=$var");
        while($row = mysqli_fetch_array($result)) {?>
             <img class="img" src="<?php echo $row['imagen']?>" id="<?php echo $row['idproducto']?>">
        <article class="des"><h2><?php echo $row['nombre_producto'] ?></h2>
        <p class="info"><?php echo $row['descripcion']?></p>
        
        <div id="carrito">
        <input type="numeric" class="ingresocarro" placeholder="1" id ="carro" value="1">
        <a href="productos.php"><button type="button" id="datos" class="btn" onClick="operacion(<?php echo $row['precio']?>,'<?php echo $row['nombre_producto']?>',<?php echo $row['idproducto']?>)"><span class="glyphicon glyphicon-shopping-cart"></span></button></a>
        <h3 class="precio">Precio: $ <?php echo $row['precio'] ?></h3>
        </div>
        <br>
        <a href="productos.php"> <img src="imagenes/regresp.jpg" class="regreso"></a>
        </article>
              <?php } ?>
            
          </section>
          <br>
        </section>
          <br>
      <hr class="featurette-divider">

      <footer>
        <p class="pull-right"><a href="#">Ir al inicio</a></p>
        <p>&copy;Pasteleria las Delicias &middot;</p>
      </footer>

    </div>
    <script type="text/javascript">
    function operacion(precio,nombre,id){
      var cantidad=$("input#carro").val();
      var total = cantidad*precio;
      var info = 'id='+id+'&nombre='+nombre+'&precio='+precio+'&cantidad='+cantidad+'&total='+total;
                    $.ajax({
        url: 'agregar.php',
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

 <?php
            $id=$_POST['id'];
  			$nombre=$_POST['nombre'];
  			$cantidad=$_POST['cantidad'];
  			$precio=$_POST['precio'];
  			$total=$_POST['total'];
        $ip=$_SERVER['REMOTE_ADDR'];
  			echo $id;
            $con=mysqli_connect("localhost","root","cruel1293","pasteleria");
			if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$a=mysqli_query($con,"INSERT INTO auxiliar (idproducto,nombre,cantidad,precio,totalproducto,ip)
			VALUES ($id,'$nombre',$cantidad,$precio,$total,'$ip')");
			mysqli_close($con);
			if($a==true){echo "i";}
			else echo "string";
        ?>
<?php
            $id=$_POST['id'];
            $con=mysqli_connect("localhost","root","cruel1293","pasteleria");
			if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$a=mysqli_query($con,"DELETE FROM auxiliar WHERE idproducto=$id");
			mysqli_close($con);
			if($a==true){echo "i";}
			else echo "string";
        ?>
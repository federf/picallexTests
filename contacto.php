<?php
	$name  = "";
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}

	$lastname = "";
	if (isset($_POST['lastname'])) {
		$lastname = $_POST['lastname'];
	}

	$phone = '';
	if (isset($_POST['phone'])) {
		$phone = $_POST['phone'];
	}
	
	$email = '';
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	$message= '';
	if (isset($_POST['message'])) {
		$message = $_POST['message'];
	}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 	<p>
        <h2>
 			Datos Recibidos
 		</h2>
 	</p>
 	<div class="container" align="center">
		 <?php
			 echo 'Nombre: <br>'.$name.'<br>';
			 echo 'Apellido:<br>'.$lastname.'<br>';
			 echo 'Telefono:<br>'.$phone.'<br>';
			 echo 'Email: <br>'.$email.'<br>';
			 echo 'Mensaje: <br>'.$message.'<br>';
		 ?>
	</div>
 </body>
</html>
<style>
	<?php include 'styles.css'; ?>
</style>
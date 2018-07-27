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
	if (isset($_POST['telephone'])) {
		$phone = $_POST['telephone'];
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
		<title>Recepción de información</title>
	</head>
	<body class="contact_body">
		<p>
			<h2 class="headers">
				Datos Recibidos
			</h2>
		</p>
		<div class="container" align="center">
		 <?php
			 echo 'Nombre: '.$name.'<br>';
			 echo 'Apellido:'.$lastname.'<br>';
			 echo 'Telefono:'.$phone.'<br>';
			 echo 'Email: '.$email.'<br>';
			 echo 'Mensaje: '.$message.'<br>';
		?>
		</div>
	</body>
</html>
<style>
	<?php include 'styles.css'; ?>
</style>
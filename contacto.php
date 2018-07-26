<?php
	$name  = "";
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}

	$lastname = "l;
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
			 echo 'Nombre: <br>'git add README.md
git commit -m "first commit"
git remote add origin https://github.com/federf/picallexTests.git
git push -u origin master.$name.'<br>';
			 echo 'Apellido:<br>'git add README.md
git commit -m "first commit"
git remote add origin https://github.com/federf/picallexTests.git
git push -u origin master.$lastname.'<br>';
			 echo 'Telefono:<br>'git add README.md
git commit -m "first commit"
git remote add origin https://github.com/federf/picallexTests.git
git push -u origin master.$phone.'<br>';
			 echo 'Email: <br>'git add README.md
git commit -m "first commit"
git remote add origin https://github.com/federf/picallexTests.git
git push -u origin master.$email.'<br>';
			 echo 'Mensaje: <br>'git add README.md
git commit -m "first commit"
git remote add origin https://github.com/federf/picallexTests.git
git push -u origin master.$message.'<br>';
		 ?>
	</div>
 </body>
</html>
<style>
	<?php include 'styles.css'; ?>
</style>
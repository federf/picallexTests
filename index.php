<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
		<title>Prueba de PHP</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="validacion_jquery.js"></script>
		<script src="jquery.validate.min.js"></script>
	</head>
 	<body class="form_body">
		<p>
			<h1 class="headers">
				Bienvenido
			</h1>
			<h2 class="headers">
				Póngase en contacto conmigo
			</h2>
			<h3 class="headers">
				Por favor, ingrese los siguientes datos, junto a su mensaje
			</h3>
		</p>
		<div class="container">
			<form id="form_send" action="/contacto.php" method="post">
				<div class="inputHolder">

					<label for="name">Nombre</label>
					<br>
						<input class="text" id="name" type="text" name="name">
						<span class="error" id="error_name" aria-live="polite"></span>
					<br>

					<label for="lastname">Apellido</label>
					<br>
						<input class="text" id="lastname" type="text" name="lastname">
						<span class="error" id="error_lastname" aria-live="polite"></span>
					<br>

					<label for="telephone">Telefono</label>
					<br>
						<input class="text" id="telephone" type="text" name="telephone" maxlength="10">
						<span class="error" id="error_telephone" aria-live="polite"></span>
					<br>

					<label for="email">Email</label>
					<br>
						<input class="text" id="email" type="email" name="email">
						<span class="error" id="error_email" aria-live="polite"></span>
					<br>
					
					<label for="message">Mensaje</label>
					<br>
					<textarea rows="10" cols="40" id="message" name="message" form="form_send" ></textarea>
				</div>
				<div class="buttonHolder">
					<input type="submit" name="submit" id="submit" class="button" value="Envíar">
				</div>
			</form>
		</div>
 	</body>
</html>
<style>
	<?php include 'styles.css'; ?>
</style>



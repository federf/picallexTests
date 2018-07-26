<!DOCTYPE html>
<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 	<p>
 		<h1>
 			BIENVENIDO
 		</h1>
 		<h2>
 			Por favor, ingrese los siguientes datos junto a su mensaje
 		</h2>
 	</p>
 	<div class="container">
 		<form id="form_send" action="/contacto.php" method="post">
 			<div class="inputHolder">
		 		<label>
		 			Nombre
				</label>
				<br>
				 <input class="text_input" id="name" type="text" name="name" >
				<br>
		 		<label>
		 			Apellido
				</label>
				<br>
				 <input class="text_input" id="lastname" type="text" name="lastname">
				<br>
				<label>
					Telefono
				</label>
				<br>
				 <input class="text_input" id="phone" type="text" name="phone">
				 <br>
				<label>
					Email
				</label>
				<br>
				<input class="text_input" id="email" type="text" name="email">
				<br>
				<label>
					Mensaje
				</label>
				<br>
				<textarea rows="10" cols="40" id="message" name="message" form="form_send" ></textarea>
			</div>
			<div class="buttonHolder">
				<input id="submit" type="submit" value="Envíar">
			</div>
 		</form>
	</div>
 </body>
</html>
<style>
	<?php include 'styles.css'; ?>
</style>
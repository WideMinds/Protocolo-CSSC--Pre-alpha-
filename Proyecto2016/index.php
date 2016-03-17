<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Protocolo CSSC</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

	<div class="contenedor">
		<div class="top">
			<img src="img/Logo Protocolo.png" class="escudo">
			<p>Protocolo CSSC 2016</p>
		</div>
		<div class="bott">
			<form class="signin" action="index.php" method="post">
				<div class="group">
					<input type="text" name="usu" placeholder="Carné" required id="index">
				</div>
				<div class="group">
					<input type="password" name="contra" placeholder="Contraseña" required id="index">
				</div>
				<div class="group">
					<input type="submit" name="entrar" value="Entrar">
				</div>
			</form>
			<?php 
				include 'php/login.php';
			 ?>
		</div>
		<footer>
			<div class="uno">
				<table>
					<tr>
						<td rowspan=""><img src="img/escudo_amarillo.png"></td>
						<td><p>Colegio Salesiano Santa Cecilia</p></td>
					</tr>
					<tr>
						<td colspan="3" id="derechos"><p>Todos los derechos reservados 2016</p></td>
					</tr>
				</table>
			</div>
			<div class="dos">
				<table>
					<tr>
						<td><div class="input1"><i class="material-icons media">get_app</i></div></td>
						<td><p>Descarga nuestro manual de uso</p></td>
					</tr>
				</table>
			</div>
			<div class="tres">
			<table>
				<tr>
					<td><p>Desarrollado por Wide Minds El Salvador</p></td>
					<td><div class="input"><img src="img/WM icon color.png" alt=""></div></td>
				</tr>
			</table></div>
		</div>
	</footer>
</body>
</html>
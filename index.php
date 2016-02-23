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
			<img src="img/escudo_amarillo.png" class="escudo">
			<p>Procotolo CSSC 2016</p>
		</div>
		<div class="bott">
			<form class="signin" action="" method="post">
				<div class="group">
					<input type="text" name="correo" placeholder="Usuario">
				</div>
				<div class="group">
					<input type="password" name="contra" placeholder="Contraseña">
				</div>
				<div class="group">
					<input type="submit" name="entrar" value="Sign in">
				</div>
			</form>
			<?php

		$servidor = "localhost";
		$usuario = "root";
		$contra = "";
		$dbNom = "dbprotocolo";
		
		if (isset($_POST['usu'])) {
			if (isset($_POST['contra'])) {
			$logUsu = $_POST['usu'];
		$logContra = $_POST['contra'];

		//Crear conexión
		$conn = mysqli_connect($servidor, $usuario, $contra, $dbNom);



		// Revisar Conexión
		if (!$conn) {
		    die("Conexión fallida: " . mysqli_connect_error());
		}

		$sql = "SELECT Carne from usuario where Carne=$logUsu";
		$consulta = mysqli_query($conn, $sql);

		if (!$consulta){
			mysqli_close($conn);
			echo "<label class='error'>Por favor compruebe que su usuario sea correcto.</label>";
			return;
		}

		$user='';

		while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			$user = $row['Carne'];
		}

		


		$sql = "SELECT Contrasena from usuario where Carne=$logUsu";
		$consulta = mysqli_query($conn, $sql);

		$clave='';

		while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			$clave = $row['Contrasena'];
		}

		if ($clave!=$logContra){
			mysqli_close($conn);
			echo "<label class='error'>Por favor compruebe que su contraseña sea correcta.</label>";
			return;
		}

		session_start();

			$_SESSION["nuevasesion"]= "Logeado";
			$_SESSION["usuario"]= $user;

				if(isset($conn)){
				mysqli_close($conn);
			}

		

		if (@$_SESSION['nuevasesion'] == "Logeado") {
			echo "Usuario: ".$_SESSION['usuario'];
		}

		}
		}
		
?>
		</div>
		<div class="footer">
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
	</div>
</body>
</html>
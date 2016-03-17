<?php
		
		include('conn.php');
		
		
		if (isset($_POST['usu'])) {
			if (isset($_POST['contra'])) {
			$logUsu = $_POST['usu'];
		$logContra = $_POST['contra'];
		

		$sql = "SELECT Carne from tbusuario where Carne=$logUsu";
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


		//si no funciona en una tabla comprueba en la otra.
		if ($user == "") {
			$sql = "SELECT Carne from tbusup where Carne=$logUsu";
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
		}
		
		
		$sql = "SELECT Contrasena, Cargo from tbusuario where Carne=$logUsu";
		$consulta = mysqli_query($conn, $sql);

		$clave='';

		while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			$clave = $row['Contrasena'];
			$tipo= $row['Cargo'];
		}
		


//si falla comprueba en la otra tabla
		if ($clave == "") {
			$sql = "SELECT Contrasena, Cargo from tbusup where Carne=$logUsu";
			$consulta = mysqli_query($conn, $sql);

		$clave='';

		while($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			$clave = $row['Contrasena'];
			$tipo= $row['Cargo'];
		}
		}


		if ($clave!=$logContra){
			mysqli_close($conn);
			echo "Por favor compruebe que su contraseña sea correcta.";
			return;
		}

		session_start();

			$_SESSION["nuevasesion"]= "Logeado";
			$_SESSION["usuario"]= $user;
			$_SESSION["tipoUsu"]= $tipo;

				if(isset($conn)){
				mysqli_close($conn);
			}

		

		if (@$_SESSION['nuevasesion'] == "Logeado") {
			if (@$_SESSION["tipoUsu"] == 'Estudiante') {
				echo "Usuario: ".$_SESSION['usuario']."<br>";
				echo "Tipo de usuario: ".$_SESSION['tipoUsu'];
			}
			if (@$_SESSION['tipoUsu'] == 'asesor'){
				header('location:php/main.php');
			}
			if (@$_SESSION['tipoUsu'] == 'administrador'){
				header('location:php/mainAdmin.php');
				// echo $_SESSION['tipoUsu'];
			}
		}

		}
		}
		
?>
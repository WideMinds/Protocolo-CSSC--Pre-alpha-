<?php 
	try{
		$datosConn = file("conn.txt");

		$servidor = rtrim($datosConn[0]);
		$usuario = rtrim($datosConn[1]);
		$contra = rtrim($datosConn[2]);
		$dbNom = rtrim($datosConn[3]);
			if ($datosConn===false){
				throw new Exception();
			}
		}
		catch (Exception $e) {
			die();
		}
	$conn = mysqli_connect($servidor, $usuario, $contra, $dbNom);
	$sql = "SELECT Nombre FROM tdusuario WHERE Cargo='Coordinador'|| 'Subcoordinador'";
	$consulta = mysqli_query($conn,$sql);
	echo "<select>";
	for ($i=0; $i < count($data); $i++) { 
			echo "<option value='{$data[$i][0]}'>{$data[$i][0]}</option>";
			}
	echo "</select>";


<?php

	try{
		$linea = file("php/conn.txt");
			$a = $linea[0];
			$b = $linea[1];
			$c = $linea[2];
			$d = $linea[3];

			if ($linea===false){
				throw new Exception();
			}
		}
		catch (Exception $e) {
			die();
		}

		$servidor = $a;
		$usuario = $b;
		$contra = $c;
		$dbNom = $d;

		echo "$servidor, $usuario, $contra, $dbNom";

?>
<?php

header('Content-Type: text/html; charset=utf-8'); 

if(isset($_POST['add'])){


@$codigo=$_POST['cod'];
@$nombre=$_POST['nom'];
@$apellido=$_POST['ape'];
@$contrasenia=$_POST['pass'];
@$grado=$_POST['grado'];
@$seccion=$_POST['seccion'];
@$cargo=$_POST['cargo'];

include('conn.php');

if(!empty($_POST["cod"]) && !empty($_POST["nom"]) && !empty($_POST["ape"]) && !empty($_POST["pass"]) && !empty($_POST["grado"]) && !empty($_POST["seccion"]) && !empty($_POST["cargo"])){


$sql= "INSERT INTO tbusuario values ('$codigo','$nombre','$apellido','$contrasenia','$grado','$seccion','$cargo')";
		$sentence=mysqli_query($conn,$sql);
		if (!$sentence) {
			echo "No se pudo insertar el usuario";
		}else{
			echo "<b>El usuario se insertó correctamente</b>"; 
		}



}else{
	echo "Por favor ingrese todos los campos.";
}

}

?>
<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$db = "dbprotocolo";

$conn = mysqli_connect($servidor, $usuario, $contrasena, $db);

if (!$conn) {
	die("La conexión falló".mysql_connect_error());
}

?>
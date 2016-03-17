<?php
    session_start();
    if ($_SESSION['tipoUsu'] != "administrador") {
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página principal</title>
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="container-main">   
      <nav class="admin">
        <a href=""><div class="group">
            <i class="material-icons nav">view_headline</i>
        </div></a>
        <a href="../index.php"><div class="group">
            <i class="material-icons nav">home</i>
        </div></a>
        <a href="addAse.php"><div class="group">
            <i class="material-icons nav">face</i>
        </div></a>
        <a href="modAse.php"><div class="group">
            <i class="material-icons nav">build</i>
        </div></a>
        <a href="delAse.php"><div class="group">
            <i class="material-icons nav">delete_forever</i>
        </div></a>
        <a href="cerrar.php"><div class="group">
            <i class="material-icons nav">power_settings_new</i>
        </div></a>        
      </nav>    
    <div class="cal admin">
      <h2>Aquí irá el calendario</h2>
    </div>
</div>  
</body>
</html>
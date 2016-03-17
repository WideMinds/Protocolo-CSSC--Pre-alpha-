<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página principal</title>
	<link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="container-main">   
      <nav>
        <a href=""><div class="group">
            <i class="material-icons nav">view_headline</i>
        </div></a>
        <a href="../index.php"><div class="group">
            <i class="material-icons nav">home</i>
        </div></a>
        <a href="addMem.php"><div class="group">
            <i class="material-icons nav">face</i>
        </div></a>
        <a href="addEve.php"><div class="group">
            <i class="material-icons nav">event</i>
        </div></a>
        <a href="AsnAct.php"><div class="group">
            <i class="material-icons nav">assignment_ind</i>
        </div></a>
        <a href="calendar.php"><div class="group">
            <i class="material-icons nav">alarm_on</i>
        </div></a>
        <a href="Report.php"><div class="group">
            <i class="material-icons nav">print</i>
        </div></a>
        <a href="cerrar.php"><div class="group">
            <i class="material-icons nav">power_settings_new</i>
        </div></a>
      </nav>    
    <div class="cal">
        <form action="" method="post" class="formulario">
            <div class="group form">
                <label>Actividad</label>
                <input type="text" name="nom">
            </div>
            <div class="group form">
                <label>Día:</label>
                <select name="dia" id="">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                </select>
            </div>      
            <div class="group form">
                <label>Lugar:</label>
                <input type="text" name="lugar">
            </div>
            <div class="group form">
                <label>Responsable:</label>
                <?php 
                    include 'selectResp.php';
                 ?>
            </div>           
            <div class="group form">
                <label>Hora inicio/Hora final:</label>
                <div class="hora">
                    <div class="inicio">
                        <i class="material-icons hora">alarm</i>
                        <input type="text" placeholder="9:00AM">
                    </div>
                    <div class="final" style="padding-top: 7px; padding-left: 10px;">
                        <i class="material-icons hora">alarm</i>
                        <input type="text" placeholder="11:00AM">
                    </div>
                </div>
            </div>
            <div class="group form">
                <input type="submit" name="add" value="Agregar">
            </div>
        </form>   
    </div>

</div>
</body>
</html>
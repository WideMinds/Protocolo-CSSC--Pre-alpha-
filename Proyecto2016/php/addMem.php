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
        <a href="addMem.php"><div class="group" title="Añadir usuarios">
            <i class="material-icons nav">face</i>
        </div></a>
        <a href="addEve.php"><div class="group" title="Añadir evento">
            <i class="material-icons nav">event</i>
        </div></a>
        <a href="AsnAct.php"><div class="group" title="Asignar actividades">
            <i class="material-icons nav">assignment_ind</i>
        </div></a>
        <a href="calendar.php"><div class="group" title="Ver calendario">
            <i class="material-icons nav">alarm_on</i>
        </div></a>
        <a href="Report.php"><div class="group" title="Ver reportes">
            <i class="material-icons nav">print</i>
        </div></a>
        <a href="cerrar.php"><div class="group">
            <i class="material-icons nav">power_settings_new</i>
        </div></a>
      </nav>    
    <div class="cal">
        <form action="" method="post" class="formulario">
            <div class="group form">
                <label>Carné</label>
                <input type="text" name="cod">
            </div>
            <div class="group form">
                <label>Nombre:</label>
                <input type="text" name="nom">
            </div>
            <div class="group form">
                <label>Apellido:</label>
                <input type="text" name="ape">
            </div>
            <div class="group form">
                <label>Contraseña:</label>
                <input type="password" name="pass">
            </div>
            <div class="group form">
                <label>Grado:</label>
                <select name="grado">
                    <option value="Séptimo">Séptimo grado</option>
                    <option value="Octavo">Octavo grado</option>
                    <option value="Noveno">Noveno grado</option>
                    <option value="Primer año">Primer año</option>
                    <option value="Segundo año">Segundo año</option>
                    <option value="Tercer año">Tercer año</option>
                </select>
            </div>
            <div class="group form">
                <label>Sección:</label>
                <select name="seccion" id="">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div class="group form">
                <label>Cargo:</label>
                <select name="cargo" id="">
                    <option value="Coordinador">Coordinador</option>
                    <option value="Sub-coordinador">Sub-coordinador</option>
                    <option value="Miembro">Miembro</option>
                </select>
            </div>
            <div class="group form">
                <input type="submit" name="add" value="Agregar">
            </div>
    <?php 
        include("ingresarusuario.php");
     ?>
        </form>   
    </div>
</div>
    <!-- <footer>
        <div class="uno">
            <table>
                <tr>
                    <td rowspan=""><img src="../img/escudo_amarillo.png"></td>
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
                <td><div class="input"><img src="../img/WM icon color.png" alt=""></div></td>
            </tr>
        </table></div>
        </div>
    </footer> -->
</body>
</html>
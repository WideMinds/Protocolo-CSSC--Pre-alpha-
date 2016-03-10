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
  <nav>
  <div class="li-group">
        <table>
        <tr>
            <td><img src="../img/Logo Protocolo.png" id="menui"></td>
            <td>
            <ul>
                <li>Agregar miembro<i class="material-icons nav">face</i></li>
                <li>Agregar eventos<i class="material-icons nav">event</i></li>
                <li>Asignar actividades<i class="material-icons nav">assignment_ind</i></li>
                <li>Calendario<i class="material-icons nav">alarm_on</i></li>
                <li>Reportes<i class="material-icons nav">print</i></li>
                <li>Cerrar sesión<i class="material-icons nav">power_settings_new</i></li>      
            </ul>
            </td>
        </tr>
      </table>
      </div>
  </nav>
<div class="contenedor-formulario">
        <div class="wrap">
            <form action="" class="formulario" name="formulario_registro" method="post">
                <div>
                <div class="input-group">
                        <label class="label" for="cod">Código:</label>
                        <input type="text" name="cod" id="codigo">
                    </div>
                    <div class="input-group">
                        <label class="label" for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="input-group">
                        <label class="label" for="ape">Apellido:</label>
                        <input type="text" name="ape" id="apelido">
                    </div>
                    <div class="input-group">
                        <label class="label" for="pass">Contraseña:</label>
                        <input type="password" name="password" id="pass">
                    </div>
                    <div class="input-group">
                        <label class="label" for="pass2">Grado:</label>
                        <select name="grado" id="grado">
                            <option value="Séptimo">Séptimo</option>
                            <option value="Octavo">Octavo</option>
                            <option value="Noveno">Noveno</option>
                            <option value="Primer año">Primer año</option>
                            <option value="Segundo año">Segundo año</option>
                            <option value="Tercer año">Tercer año</option>
                        </select>
                    </div>
                    <div class="input-group">
                    <label for="secc">Sección:</label>
                    <select name="secc" id="secc">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                    </div>
                    <div class="input-group">
                        <label class="label" for="hor">Horario:</label><br>
                        <input type="text" name="inicio" class="hora" style="width:30%"><span><i class="material-icons">alarm_on</i></span>
                        <input type="text" name="final" style="margin-left:40px;width:30%"><span class="fin"><i class="material-icons">alarm_on</i></span>
                    </div>
                    <div class="input-group">
                        <label for="act">Actividad:</label>
                        <!-- Esto tiene que ir con php y que weba -->
                    </div>
                    <input type="submit" id="btn-submit" value="Enviar">
                </div>  
            </form>
        </div>
    </div>
    <footer>
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
    </footer>
</body>
</html>
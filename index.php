<!DOCTYPE html>
<html>
              <head>
                      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'></meta>
                      <meta name='Author'  content='Alancay Natalia'></meta>
                      <title>.::Sistema de Transporte::.</title>
                      <link rel='shortcut icon' href='../img/iconTransporte.png' type='image/x-icon' />
                      <link rel="stylesheet" href="css/estilo2.css"/>
                  </head>
                  <body>
                      <div style='z-index: 3;'>
                        <div id='header'>
                            <h1>Sistema de Gestión de Transporte</h1>
                             <form id='frmC' name='frmC' method='POST' action="file/comprobarUser.php" onsubmit="return validarFormIndex(this)">
                                <table class='tablaC' border='0' align="center">
                                  <tr>
                                      <td colspan='6' id='tdHeader'><label></label><br/></td>
                                  </tr> 
                                  <tr>
                                       <td><label>Nombre de usuario</label></td>
                                  </tr>
                                  <tr>
                                      <td><input type="text" id="campoUser" name="user"/><br/></td>
                                  </tr>
                                  <tr>
                                       <td><label>Contraseña</label></td>
                                  </tr>
                                  <tr>
                                      <td><input type="password" id="campoPass" name="pass"/></td>
                                  </tr>
                                  <tr><td></td></tr>
                                  <tr>
                                      <td><input type="submit" class="btn" value="Iniciar sesión"/></td>
                                  </tr>
                                </table>
                            </form>
                        </div>
                        </div>
                        <div id='footer'>© Desarrollado por Natalia Alancay
                        </div>
                  </body>
</html>
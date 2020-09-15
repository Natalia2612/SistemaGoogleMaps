<?php
session_start();
$user=$_SESSION['user'];
$tipoUser=$_SESSION['tipo'];
$pass=$_SESSION['pass'];
$codV="";
if($user AND $tipoUser){
    include "menu.php";
    include "conexion.php";
    echo"<form class='frmC' method='post' action='mostrarRecorrido.php' onsubmit='return validar(selectV)'>
              <table class='tablaC' border='0'>
                  <tr>
                      <td colspan='6' id='tdHeader'>CONSULTAR RECORRIDO DEL VEHÍCULO</td>
                  </tr>
                  <tr>
                      <td></td>
                      <td colspan='3'><label>Seleccione código:</label></td>
                      <td><select name='selectV' onChange='selVehiculo(selectV)'>
                                <option value=''></option>";
                                $sql=mysqli_query($conexion,"SELECT * FROM vehiculo ORDER BY id_vehiculo");
                                while($fila=mysqli_fetch_array($sql)){
                                      $codV=$fila['id_vehiculo'];
                                      echo"<option value='$codV'>$codV</option>";
                                }
                                echo"</select>
                            <input type='hidden' name='codigoV' id='codigoV' value=''/>
                      </td>
                      <td><input class='btn' type='submit' name='consultar' value='Consultar'/></td>
                  </tr>
              </table>
          </form>";
          include "footer.php";
}
else{ 
  include "cerrarsesion.php";
 }   
?>
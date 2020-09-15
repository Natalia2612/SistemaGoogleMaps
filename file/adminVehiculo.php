<?php
session_start();
$user=$_SESSION['user'];
$tipoUser=$_SESSION['tipo'];
$pass=$_SESSION['pass'];
if($user AND $tipoUser){
  include "menu.php";
  echo"<form class='frmC' method='post' action='adminVehiculo.php'>
            <table class='tablaC' border='0'>
                <tr>
                   <td colspan='6' id='tdHeader'>GESTIONAR VEHÍCULO</td>
                </tr>    
                <tr>
                    <td colspan='3'><label>Ingresar código:</label></td>
                    <td><input type='text' name='buscarCod' id='buscarCod' size='35' onkeypress='return soloNumeros(event);'/></td>
                    <td><input class='btn' type='submit' name='buscar' value='Buscar'/></td>
                    <td colspan='4'>
                      <input class='btnR' type='submit' name='nuevoVehiculo' value='Registar vehiculo'/>
                    </td>
                </tr>
            </table>
       </form>";
        include "conexion.php";
        if(isset($_POST['buscar']) && $_POST['buscarCod']){
                                 $buscarCod=$_POST['buscarCod'];
                                 $consulta=mysqli_query($conexion, "SELECT * FROM vehiculo v WHERE v.id_vehiculo=".$buscarCod);
                                 $fila=mysqli_fetch_array($consulta);
                                 if($fila){
                                    $codV=$fila['id_vehiculo'];
                                    $capacidad=$fila['capacidad'];
                                     echo"<form class='frmC' name='frmC' method='POST' action='adminVehiculo.php' onsubmit='return validarFormVehiculo(this)'>
                                            <table class='tablaC' border='0'>
                                                    <tr>
                                                        <td colspan='2' id='tdHeader'>DATOS DEL VEHICULO:</td>
                                                     </tr>
                                                     <tr>
                                                         <td><label>Código:</label></td>
                                                         <td><input type='text' name='codV' id='codV' maxlength='8' size='25' readonly='readonly' value='$codV'/></td>
                                                      </tr>
                                                       <tr>
                                                           <td><label>Capacidad:</label></td>
                                                           <td><input type='text' name='capacidad' id='capacidad' maxlength='45' size='25' value='$capacidad' onkeypress='return soloNumeros(event);'/></td>
                                                       </tr>
                                                       <tr>
                                                           <td colspan='2'><input type='submit' class='btnM' name='modificarVehiculo' value='Modificar'/>
                                                               <input type='submit' class='btnE' name='eliminarVehiculo' onclick='javascript:confirmarEliminar();' value='Eliminar'/>
                                                               <input type='hidden' name='confirmarAccion' id='confirmarAccion' value=''/></td>
                                                       </tr>
                                                </table>
                                          </form>
                                         ";
                                 }
                                 else{
                                  echo"
                                         <html>
                                           <head>
                                              <meta http-equiv='REFRESH' content='0;url=adminVehiculo.php'>    
                                              <script>
                                                 alert('El vehiculo indicado no existe en el sistema.');
                                             </script>
                                          </head>
                                       </html>
                                      ";
                              }
                             }
                             if(isset($_POST['modificarVehiculo'])){
                                 $actualizar=mysqli_query($conexion,"UPDATE vehiculo SET capacidad='".$_POST['capacidad']."' WHERE id_vehiculo=".$_POST['codV']);
                                     if($actualizar){
                                         echo"
                                            <html>
                                              <head>
                                                 <meta http-equiv='REFRESH' content='0;url=adminVehiculo.php'>    
                                                 <script>
                                                    alert('Se actualizo dato del vehiculo correctamente.');
                                                </script>
                                             </head>
                                          </html>
                                         ";
                                     }
                                     else{
                                          echo"Ha fallado la actualización ".mysqli_error();
                                     }
                             }
                             if(isset($_POST['eliminarVehiculo'])){
                              $delete= mysqli_query($conexion,"DELETE FROM vehiculo WHERE id_vehiculo=".$_POST['codV']);
                               if($delete)
                               {
                                echo"
                                         <html>
                                           <head>
                                              <meta http-equiv='REFRESH' content='0;url=adminVehiculo.php'>    
                                              <script>
                                                 alert('Se ha eliminado el vehiculo correctamente.');
                                             </script>
                                          </head>
                                       </html>
                                      ";
                               }
                           }
                             if(isset($_POST['nuevoVehiculo'])){
                                 echo"<form class='frmC' name='frmC' method='post' onsubmit='return validarFormVehiculo(this)'>
                                            <table class='tablaC' border='0'>
                                                    <tr>
                                                        <td colspan='2' id='tdHeader'>REGISTRAR NUEVO VEHICULO&#8594; Ingresa los datos:</td>
                                                     </tr>
                                                     <tr>
                                                         <td><label>Código:</label></td>
                                                         <td><input type='text' name='codV' id='codV' maxlength='8' size='25' onkeypress='return soloNumeros(event);'/></td>
                                                      </tr>
                                                       <tr>
                                                           <td><label>Capacidad:</label></td>
                                                           <td><input type='text' name='capacidad' id='capacidad' maxlength='45' size='25' onkeypress='return soloNumeros(event);'/></td>
                                                       </tr>
                                                       <tr>
                                                            <td colspan='6'><input type='submit' class='btnN' name='insertarVehiculo' value='Guardar'/>
                                                       </tr>
                                                </table>
                                          </form>
                                         ";
                             }
                             if(isset($_POST['insertarVehiculo'])){
                                 $consulta=mysqli_query($conexion,"SELECT * FROM vehiculo v WHERE v.id_vehiculo=".$_POST['codV']);
                                 $fila=mysqli_fetch_array($consulta);
                                 if($fila){
                                     echo"
                                        <html>
                                          <head>
                                             <meta http-equiv='REFRESH' content='0;url=adminVehiculo.php'>    
                                             <script>
                                                alert('El vehiculo ya existe en el sistema');
                                            </script>
                                         </head>
                                      </html>
                                     ";
                                 }
                                 else{
                                     $insertar=mysqli_query($conexion,"INSERT INTO vehiculo VALUE('".$_POST['codV']."','".$_POST['capacidad']."')");
                                     if($insertar){
                                         echo"
                                            <html>
                                              <head>
                                                 <meta http-equiv='REFRESH' content='0;url=adminVehiculo.php'>    
                                                 <script>
                                                    alert('Se han guardado existosamente los datos del nuevo vehiculo');
                                                </script>
                                             </head>
                                          </html>
                                         ";
                                     }
                                     else{
                                          echo"Ha fallado la insercion ".mysqli_error();
                                     }
                                }
                             }
                             include "footer.php";
}
else{
  include "cerrarsesion.php";
 }   
?>

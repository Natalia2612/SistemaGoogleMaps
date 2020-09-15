<?php
session_start();
$user=$_SESSION['user'];
$tipoUser=$_SESSION['tipo'];
$pass=$_SESSION['pass'];
if($user AND $tipoUser){
      include "menu.php";
              echo"
                   <form class='frmC' method='post' action='adminCliente.php'>
                      <table class='tablaC' border='0'>
                          <tr><td colspan='6' id='tdHeader'>GESTIONAR CLIENTES</td></tr>    
                          <tr>
                              <td colspan='3'><label>Ingresar código:</label></td>
                              <td><input type='text' name='buscarCod' id='buscarCod' size='35' onkeypress='return soloNumeros(event);'/></td>
                              <td><input class='btn' type='submit' name='buscar' value='Buscar'/></td>
                              <td colspan='4'>
                                 <input class='btnR' type='submit' name='nuevoCliente' value='Registar cliente'/>
                              </td>
                          </tr>
                      </table>
                  </form>";
                  include "conexion.php";
                  if(isset($_POST['buscar']) && $_POST['buscarCod']){
                    $buscarCod=$_POST['buscarCod'];
                    $consulta=mysqli_query($conexion,"SELECT * FROM cliente c WHERE c.id_cliente=".$buscarCod);
                    $fila=mysqli_fetch_array($consulta);
                        if($fila){
                            $codC=$fila['id_cliente'];
                            $latitud=$fila['latitud'];
                            $longitud=$fila['longitud'];
                            $demanda=$fila['demanda'];
                            echo"<form class='frmC' name='frmC' method='POST' action='adminCliente.php' onsubmit='return validarFormCliente(this)'>
                                      <table class='tablaC' border='0'>
                                          <tr>
                                              <td colspan='2' id='tdHeader'>DATOS DEL CLIENTE:</td>
                                          </tr>
                                          <tr>
                                              <td><label>Código:</label></td>
                                                <td><input type='text' name='codC' id='codC' maxlength='8' size='25' readonly='readonly' value='$codC' onkeypress='return soloNumeros(event);'/></td>
                                              </tr>
                                          <tr>
                                              <td><label>Latitud:</label></td>
                                              <td><input type='text' name='latitud' id='latitud' maxlength='45' size='25' value='$latitud' onkeypress='return soloNumeros(event);'/></td>
                                          </tr>
                                          <tr>
                                              <td><label>Longitud:</label></td>
                                              <td><input type='text' name='longitud' id='longitud' maxlength='45' size='25' value='$longitud'onkeypress='return soloNumeros(event);'/></td>
                                          </tr>
                                          <tr>
                                              <td><label>Demanda:</label></td>
                                              <td><input type='text' name='demanda' id='demanda' maxlength='45' size='25' value='$demanda'onkeypress='return soloNumeros(event);'/></td>
                                          </tr>
                                          <tr>
                                              <td colspan='2'>
                                              <input type='submit' class='btnM' name='modificarCliente' value='Modificar'/>
                                              <input type='submit' class='btnE' name='eliminarCliente' onclick='javascript:confirmar();' value='Eliminar'/>
                                              <input type='hidden' name='confirmarAccion' id='confirmarAccion' value=''/></td>
                                          </tr>
                                     </table>
                                </form>
                                         ";
                                 }
                                 else{
                                     echo"  <html>
                                              <head>
                                                 <meta http-equiv='REFRESH' content='0;url=adminCliente.php'>    
                                                 <script>
                                                    alert('El cliente indicado no existe en el sistema.');
                                                </script>
                                             </head>
                                          </html>
                                         ";
                                 }
                             }
                             if(isset($_POST['modificarCliente'])){
                                 $actualizar=mysqli_query($conexion,"UPDATE cliente SET latitud='".$_POST['latitud']."', longitud='".$_POST['longitud']."',demanda='".$_POST['demanda']."' WHERE id_cliente=".$_POST['codC']);
                                     if($actualizar){
                                         echo"
                                            <html>
                                              <head>
                                                 <meta http-equiv='REFRESH' content='0;url=adminCliente.php'>    
                                                 <script>
                                                    alert('Los datos del cliente se han actualizado correctamente.');
                                                </script>
                                             </head>
                                          </html>
                                         ";
                                     }
                                     else{
                                          echo"Ha fallado la actualización ".mysqli_error();
                                     }
                             }
                              if(isset($_POST['eliminarCliente'])){
                                 $delete= mysqli_query($conexion,"DELETE FROM cliente WHERE id_cliente=".$_POST['codC']);
                                  if($delete)
                                  {
                                   echo"
                                            <html>
                                              <head>
                                                 <meta http-equiv='REFRESH' content='0;url=adminCliente.php'>    
                                                 <script>
                                                    alert('Se ha eliminado el cliente correctamente.');
                                                </script>
                                             </head>
                                          </html>
                                         ";
                                  }
                              }
                             if(isset($_POST['nuevoCliente'])){
                                 echo"<form class='frmC' name='frmC' method='post' onsubmit='return validarFormCliente(this)'>
                                            <table class='tablaC' border='0'>
                                                    <tr>
                                                        <td colspan='2' id='tdHeader'>REGISTRAR NUEVO CLIENTE &#8594; Ingresa los datos:</td>
                                                     </tr>
                                                     <tr>
                                                         <td><label>Código:</label></td>
                                                         <td><input type='text' name='codC' id='codC' maxlength='8' size='25' onkeypress='return soloNumeros(event);'/></td>
                                                      </tr>
                                                      <tr>
                                                          <td><label>Latitud:</label></td>
                                                          <td><input type='text' name='latitud' id='latitud' maxlength='45' size='25'/></td>
                                                       </tr>
                                                       <tr>
                                                           <td><label>Longitud:</label></td>
                                                           <td><input type='text' name='longitud' id='longitud' maxlength='45' size='25'/></td>
                                                       </tr>
                                                       <tr>
                                                           <td><label>Demanda:</label></td>
                                                           <td><input type='text' name='demanda' id='demanda' maxlength='45' size='25' onkeypress='return soloNumeros(event);'/></td>
                                                       </tr>
                                                       <tr>
                                                            <td colspan='6'><input type='submit' class='btnN' name='insertarCliente' value='Guardar'/>
                                                       </tr>
                                                </table>
                                          </form>
                                         ";
                             }
                             if(isset($_POST['insertarCliente'])){
                                 $consulta=mysqli_query($conexion,"SELECT * FROM cliente c WHERE c.id_cliente=".$_POST['codC']);
                                 $fila=mysqli_fetch_array($consulta);
                                 if($fila){
                                     echo"
                                        <html>
                                          <head>
                                             <meta http-equiv='REFRESH' content='0;url=adminCliente.php'>    
                                             <script>
                                                alert('El cliente ya existe en el sistema');
                                            </script>
                                         </head>
                                      </html>
                                     ";
                                 }
                                 else{
                                     $insertar=mysqli_query($conexion,"INSERT INTO cliente VALUE('".$_POST['codC']."','".$_POST['latitud']."','".$_POST['longitud']."','".$_POST['demanda']."')");
                                     if($insertar){
                                         echo"
                                            <html>
                                              <head>
                                                 <meta http-equiv='REFRESH' content='0;url=adminCliente.php'>    
                                                 <script>
                                                    alert('Se han guardado existosamente los datos del nuevo cliente');
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

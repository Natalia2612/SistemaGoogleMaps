<?php
session_start();
$user=$_SESSION['user'];
$tipoUser=$_SESSION['tipo'];
$pass=$_SESSION['pass'];
if($user AND $tipoUser){
    echo"
         <html>
              <head>
                      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'></meta>
                      <meta name='Author'  content='Alancay Natalia'></meta>
                      <title>.::Sistema de Transporte::.</title>
                      <link rel='shortcut icon' href='../img/iconTransporte.png' type='image/x-icon' />
    <style>
                          #footer
                            {
                            background-color:#0B0719;
                            position: fixed;
                            bottom: 0px;
                            left: 0px;
                            right: 0px;
                            height: 40px;
                            margin-bottom: 0px;
                            text-align: center;
                            color: #FFFFFF;
                            font-size: 10px;
                            }
                            #header
                            {
                            background-color:#210B61;
                            position: fixed;
                            width: 100%;
                            height: 50px;
                            z-index: 1;
                            }
                            *{
                            margin: 0px;
                            border: 0px;
                            padding: 0px;
                            spacing: 0px;
                            }
                            body {
                            font-family:Verdana;
                            background-color:#EBEDEF;
                            padding: 0px;
                          }

                          h1{text-align: left;
                             font-size: 25px;
                             font-family:Arial;
                             text-shadow:2px 2px 2px #566573;
                             border-radius:10px 10px 10px 10px;
                             color:#FAFAFA;
                             border-bottom: 0px solid #566573;
                             margin-top: 10px;
                             margin-left: 5px;
                             margin-bottom: 11px;
                          }


                          ul#navmenu, ul.sub1, ul.sub2 {
                            list-style-type: none; 
                            font-size: 10pt; /*Al final de la */
                           }

                          ul#navmenu li {
                            /*outline: 1px solid red;*/
                            width: 125px;
                            text-align: center;
                            position:relative;
                            float:left;
                            margin-right:4px;
                          }

                          ul#navmenu a {
                            text-decoration:none;
                            display: block;
                            width:125px;
                            height:25px;
                            line-height:25px;
                            background-color:#F5EEF8;
                            color:#4A235A;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                          }

                          ul#navmenu .sub1 li {
                           /* border: 1px solid green;*/
                          }

                          ul#navmenu .sub1 a{
                            margin-top:5px;  
                          }

                          ul#navmenu .sub2 a {
                            margin-left:5px;
                          }

                          ul#navmenu li:hover > a {
                            background-color:#A9A9F5; 
                          }

                          ul#navmenu li:hover a:hover {
                            background-color:#CECEF6;
                          }

                          ul#navmenu ul.sub1 {
                            display: none; /*or block*/
                            position: absolute;
                            top: 26px;
                            left: 0px;
                          }

                          ul#navmenu ul.sub2 {
                            display: none; /*or block*/
                            position: absolute;
                            top:    0px;
                            left: 126px;
                          }

                          ul#navmenu li:hover .sub1 {
                            display:block;
                          }

                          ul#navmenu .sub1 li:hover .sub2 {
                            display:block;
                          }
                          ul#navmenu li img {
                              height:60px;
                              width:126px;
                          }
                          #imagenPerfil{
                              height:81px;:
                          }
                          .darrow {
                            font-size: 9pt;
                            position: absolute;
                            top: 5px;
                            right: 5px;
                          }

                          .rarrow {
                            font-size:13pt;
                            position:absolute;
                            top:5px;
                            right:2px;
                          }
                        .tablaC{
                            width:50%;
                            height: 60px;
                            border:thin solid #380B61;
                            border-radius:1px 1px 1px 1px;
                            margin:0 auto;
                        }
                        #tdHeader{
                            background:#380B61;
                            text-align:left;
                            padding-left:10px;
                            font-size: 12px;
                            font-family: times new roman;
                            text-shadow:1px 1px 1px #000;
                            border-radius:1px 1px 1px 1px;
                            color: #FAFAFA;
                        }
                        #frmC label{
                            width:100px;
                            float: right;
                            text-align:right;
                            font-size: 13px;
                            font-family: Arial;
                            text-shadow:1px 0px 1px #566573;
                        }
                        #frmC input{
                            width: 200px;
                            border: thin solid #4A235A;
                            font-family: Arial;
                            color: #273746;
                            font-size: 13px;
                            margin-top: 4px;
                            margin-bottom: 4px;
                        }
                        #frmC .btn{
                            width: 160px;
                            background: #380B61;
                            color: #FAFAFA;
                            font-family: Times New Roman;
                            font-size: 16px;
                            border: 1px solid #BDBDBD;
                            margin: 4px 0px 5px 4px;
                            border-radius:5px; 
                        }
                        #frmC .btnR{
                            width: 160px;
                            background: #380B61;
                            color:  #FAFAFA;
                            font-family: Times New Roman;
                            font-size: 16px;
                            border: 1px solid #BDBDBD;
                            margin: 4px 0px 5px 182px;
                            border-radius:5px; 
                        }
                        #frmC .btnM{
                            width: 100px;
                            background: #380B61;
                            color:  #FAFAFA;
                            font-family: Times New Roman;
                            font-size: 16px;
                            border: 1px solid #BDBDBD;
                            margin: 4px 0px 5px 200px;
                            border-radius:5px; 
                        }
                        #frmC .btnE{
                            width: 100px;
                            background: #380B61;
                            color:  #FAFAFA;
                            font-family: Times New Roman;
                            font-size: 16px;
                            border: 1px solid #BDBDBD;
                            margin: 4px 0px 5px 0px;
                            border-radius:5px; 
                        }
                      </style>
                      <script type='text/javascript' language='javasript' src='../js/js_validaciones.js'></script>
                  </head>
                  <body>
                      <div style='z-index: 3;'>
                        <div id='header'>
                             <h1>Sistema de Gestión de Transporte</h1>
                             <ul id='navmenu'>
                                <li><a href='#'>Perfil</a><span class='darrow'>&#9660;</span>
                                    <ul class='sub1'>
                                        <li id='imagenPerfil'><a href='#'><img src='../img/user.jpg' alt='#' title='#' />$tipoUser</a></li>
                                        <li><a href='cerrarsesion.php'>Cerrar sesión</a></li>
                                    </ul>
                                </li>
                                <li><a href='#'>Administrar</a><span class='darrow'>&#9660;</span>
                                        <ul class='sub1'>
                                            <li><a href='adminCliente.php'>Clientes</a></li>
                                            <li><a href='adminVehiculo.php'>Vehiculos</a></li>
                                            <li><a href='#'>Plan de viaje</a><span class='rarrow'>&#9654;</span>
                                            <ul class='sub2'>
                                               <li><a href='planDeLista.php'>Por Clientes</a></li>
                                            </ul>
                                            </li>
                                        </ul>
                                </li>      
                                <li><a href='#'>Consultar</a>
                                      <span class='darrow'>&#9660;</span>
                                    <ul class='sub1'>
                                        <li><a href='consultarRecorridos.php'>Recorridos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                         <br/><br/><br/><br/><br/>
                             <form id='frmC' method='post' action='adminVehiculo.php'>
                                 <table class='tablaC' border='0'>
                                     <tr>
                                         <td colspan='6' id='tdHeader'>GESTIONAR VEHÍCULO</td>
                                     </tr>    
                                     <tr>
                                         <td colspan='3'><label>Ingresar código:</label></td>
                                         <td><input type='text' name='buscarCod' id='buscarCod' size='35' onkeypress='return soloNumeros(event);'/></td>
                                         <td><input class='btn' type='submit' name='buscar' value='Buscar'/></td>
                                         <td colspan='4'>
                                         <input class='btnR' type='submit' name='nuevoVehiculo' value='Registar nuevo vehiculo'/>
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
                                     echo"<br/>
                                         <form id='frmC' name='frmC' method='POST' action='adminVehiculo.php' onsubmit='return validarFormVehiculo(this)'>
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
                                 echo"<br/>
                                         <form id='frmC' name='frmC' method='post' onsubmit='return validarFormVehiculo(this)'>
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
                                                            <td colspan='6'><input type='submit' class='btnM' name='insertarVehiculo' value='Guardar'/>
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
                             
                        echo"</div>
                        <div id='footer'>© Desarrollado por Natalia Alancay
                        </div>
                  </body>
</html>
        ";
}
else{
     echo"
          <html>
            <head>
               <meta http-equiv='REFRESH' content='0;url=../'>
               
               <script>
                 alert('Inicia sesion');
               </script>
              
             </head>
          </html>
         ";
 }   
?>

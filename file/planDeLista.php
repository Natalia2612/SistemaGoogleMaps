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
                          #tdHeader{
                            background:#380B61;
                            text-align:left;
                            padding-left:10px;
                            padding-top:4px;
                            padding-bottom:4px;
                            font-size: 11px;
                            font-family: times new roman;
                            text-shadow:1px 1px 1px #000;
                            border-radius:1px 1px 1px 1px;
                            color: #FAFAFA;
                          }
                          #tdHeader1{
                            background:#BCA9F5;
                            text-align:left;
                            padding-left:10px;
                            padding-top:4px;
                            padding-bottom:4px;
                            font-size: 11px;
                            font-family: times new roman;
                            text-shadow:1px 0px 1px #566573;
                            border:thin solid #380B61;
                          }
                          .tablaC{
                            width:602px;
                            height: 60px;
                            border:thin solid #380B61;
                            border-radius:1px 1px 1px 1px;
                            margin:0 auto;
                          }
                          #frmC label{
                            font-size: 13px;
                            font-family: Arial;
                            text-shadow:1px 0px 1px #566573;
                            width:167px;
                            padding-left:90px;
                          }
                          #frmC input{
                            border: thin solid #4A235A;
                            font-family: Arial;
                            color: #273746;
                            font-size: 13px;
                            margin-top: 4px;
                            margin-bottom: 4px;
                          }
                          div.listaC{
                            border:1px solid #380B61;
                            height:250px;
                            width:600px;
                            overflow:scroll;
                            margin:0 auto;
                        }
                         .tablaCliente{
                            width:583px;
                            border-spacing:2px;
                            border-collapse: separate;
                        }
                         #tdFooter1{ 
                            width:50px;
                            font-size: 14px;
                            font-family:times new roman;
                            text-shadow:1px 0px 1px #566573;
                            padding-left:10px;
                          }
                          #tdFooter{
                            width:133px;
                            text-align:center;
                            font-size: 14px;
                            font-family: times new roman;
                            text-shadow:1px 0px 1px #566573;
                            padding-left:10px;
                          }
                          #frmC .btn{
                                width: 160px;
                                background: #380B61;
                                color: #FAFAFA;
                                font-family: Times New Roman;
                                font-size: 16px;
                                border: 1px solid #BDBDBD;
                                margin: 4px 0px 0px 820px;
                                border-radius:5px; 
                          }
                          select {
                             border:1px solid #000000;
                             width:60px;
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
                        <br/><br/><br/><br/><br/>";
                        include "conexion.php";
                        echo"<form id='frmC' method='post' action='planDeLista.php' onsubmit='return validarLista(selectV,capacidad,contador)'>
                                 <table class='tablaC' border='0'>
                                     <tr>
                                         <td colspan='5' id='tdHeader'>PLANIFICAR LISTADO DE CLIENTE PARA RECORRIDO</td>
                                     </tr>
                                     <tr>
                                         <td colspan='5' id='tdHeader1'>SELECCIONE EL VEHÍCULO:</td>
                                     </tr>
                                     <tr>
                                         <td></td>
                                         <td><label>Código:</label></td>
                                         <td><select name='selectV' onChange='selectVehiculo(selectV)'>
                                                     <option value=''></option>";
                                         $sql=mysqli_query($conexion,"SELECT * FROM vehiculo ORDER BY id_vehiculo");
                                         while($fila=mysqli_fetch_array($sql)){
                                             $codV=$fila['id_vehiculo'];
                                             $capacidad=$fila['capacidad'];
                                             $sql1=mysqli_query($conexion, "SELECT COUNT(*) AS cantidad FROM asignacionvdec WHERE id_vehiculo=$codV");
                                             $fila1=mysqli_fetch_array($sql1);
                                             $tam=$capacidad-$fila1['cantidad'];
                                                  
                                             echo"<option value='$codV $tam'>$codV</option>";
                                         }
                                        echo"</select>
                                             <input type='hidden' name='codigoV' id='codigoV' value=''/>
                                         </td>
                                         <td><label name='capacidadlabel' id='capacidadlabel'>Capacidad:</label><input name='capacidad' id='capacidad' size='3' readonly='readonly' value=''/>
                                         <input  type='hidden' name='contador' id='contador' value='0'/></td>
                                        <td></td>
                                     </tr>
                                     <tr>
                                         <td colspan='5'></td>
                                     </tr>
                                     <tr>
                                         <td colspan='5' id='tdHeader1'>SELECCIONE LOS CLIENTES:</td>
                                     </tr> 
                                     <tr>
                                          <td bgcolor='#9F81F7' id='tdFooter1'>Check</td>
                                          <td bgcolor='#9F81F7' id='tdFooter'>Código</td>
                                          <td bgcolor='#9F81F7'id='tdFooter'>Latitud</td>
                                          <td colspan='2' bgcolor='#9F81F7' id='tdFooter'>Longitud</td>
                                     </tr>
                                 </table>
                                 <div class='listaC'>
                                      <table class='tablaCliente'>";
                                      $sql=mysqli_query($conexion,"SELECT * FROM asignacionvdec");
                                      while($fila=mysqli_fetch_array($sql)){
                                          $codC=$fila['id_cliente'];
                                          $fecha=$fila['fecha'];
                                          $dato=explode("/",$fecha);//extrae dia mes ano de una fecha especifica
                                          //año-mes-dia
                                          $f1=$dato[2]."-".$dato[1]."-".$dato[0]." 00:00:00";
                                          $segundos=strtotime('now')-strtotime($f1);
                                          $diferencia_dias=intval($segundos/60/60/24);
                                          if($diferencia_dias>0){
                                             $sql1 ="DELETE FROM asignacionvdec WHERE id_cliente='$codC'";
                                             $result = mysqli_query($conexion, $sql1);
                                          }
                                      }
                                      $sql=mysqli_query($conexion,"SELECT * FROM cliente");
                                      $resultado=mysqli_num_rows($sql); // obtenemos el número de filas
                                      while($fila=mysqli_fetch_array($sql)){
                                          $cod=$fila['id_cliente'];
                                          $lat=$fila['latitud'];
                                          $lon=$fila['longitud'];
                                          $esta=false;
                                          $sql1=mysqli_query($conexion,"SELECT id_cliente FROM asignacionvdec");
                                          while($fila1=mysqli_fetch_array($sql1)){
                                              if($cod==$fila1['id_cliente'])
                                                  $esta=true;
                                          }
                                          if($esta==false){
                                              echo"<tr>
                                                       <td align='center' id='tdFooter1'>
                                                           <input type='checkbox'  name='chbox[]' id='chboxV' onclick='contar(chboxV)' value='$cod'/>
                                                       </td>
                                                       <td bgcolor='#D8D8D8' id='tdFooter'>$cod</td>
                                                       <td bgcolor='#D8D8D8' id='tdFooter'>$lat</td>
                                                       <td colspan='2' bgcolor='#D8D8D8' id='tdFooter'>$lon
                                                       </td>
                                                   </tr>";
                                          }
                                      }
                                      echo"
                                      </table>                        
                                 </div>
                                 <input type='submit' class='btn' name='generarLista' value='Generar Lista'/>
                             </form>";
                             if(isset($_POST['generarLista'])){
                                     $codV=$_POST['codigoV'];
                                     $fecha=date('d/m/Y');
                                     foreach($_POST['chbox'] as $codC){
                                       $insertar=mysqli_query($conexion,"INSERT INTO asignacionvdec VALUE('$codC'+1,'$codC','$codV','$fecha')");
                                    }
                                    if($insertar){
                                         $rs= mysqli_query($conexion,"SELECT v.id_vehiculo FROM vehiculo v, asignacionvdec a WHERE v.id_vehiculo = a.id_vehiculo GROUP BY v.id_vehiculo");
                                         $cantRows= mysqli_num_rows($rs);
                                         $cad1='{"vehiculos":[';
                                         $i=1;
                                         $cad2="";
                                         while($fila=mysqli_fetch_array($rs)){
                                             $codV=$fila['id_vehiculo'];
                                             $rs1= mysqli_query($conexion,"SELECT * FROM vehiculo WHERE id_vehiculo=$codV");
                                             $vehiculo=mysqli_fetch_object($rs1);
                                             $rs2=mysqli_query($conexion,"SELECT c.id_cliente, c.latitud, c.longitud, c.demanda FROM cliente c, asignacionvdec a WHERE c.id_cliente = a.id_cliente AND a.id_vehiculo=$codV");
                                            while($obj = mysqli_fetch_object($rs2)){ 
                                               $clientes[] = $obj;
                                            }
                                            if($i<$cantRows){
                                                $cad2.='{"vehiculo":'.json_encode($vehiculo).',"clientes":' .json_encode($clientes).'},';
                                            }
                                            else{
                                               $cad2.='{"vehiculo":'.json_encode($vehiculo).',"clientes":' .json_encode($clientes).'}';
                                            }
                                          $i++;
                                        }
                                        $cad3=']}';
                                        $cadena=$cad1.$cad2.$cad3;
                                        //echo ''.$cadena;
                                       //Si queremos mostrar los datos de la base en un archivo json  
                                         $json = file_get_contents('nuevo.json');
                                         $data = json_decode($json);
                                         file_put_contents('nuevo.json', $cadena);
                                         echo"
                                              <html>
                                                  <head>
                                                     <meta http-equiv='REFRESH' content='0;url=planDeLista.php'>    
                                                     <script>
                                                        alert('El listado se generó existosamente..');
                                                    </script>
                                                 </head>
                                              </html>
                                             ";
                                    }
                                    else{
                                         echo"Ha fallado la insercion ".mysqli_error();
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
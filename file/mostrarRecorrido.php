<?php
session_start();
$user=$_SESSION['user'];
$tipoUser=$_SESSION['tipo'];
$pass=$_SESSION['pass'];
if($user AND $tipoUser){
    $codV=$_POST['codigoV'];
    $codV=$_Post['codigoP'];
    echo"
         <html>
              <head>
                      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'></meta>
                      <meta name='Author'  content='Alancay Natalia'></meta>
                      <title>.::Sistema de Transporte::.</title>
                      <link rel='shortcut icon' href='../img/iconTransporte.png' type='image/x-icon' />
                      <script type='text/javascript' language='javasript' src='../js/js_validaciones.js'></script>
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
                            width:500px;
                            height: 60px;
                            border:thin solid #380B61;
                            border-radius:1px 1px 1px 1px;
                            margin:0 auto;
                        }
                        #frmC label{
                            width:120px;
                            float: right;
                            text-align:right;
                            font-size: 13px;
                            font-family: Arial;
                            text-shadow:1px 0px 1px #566573;
                            margin: 5px 0px 5px 85px;
                        }
                        #frmC .btn{
                            width: 100px;
                            background: #380B61;
                            color: #FAFAFA;
                            font-family: Times New Roman;
                            font-size: 16px;
                            border: 1px solid #BDBDBD;
                            margin: 5px 80px 5px 0px;
                            border-radius:5px;
                        }
                        select {
                             border:1px solid #000000;
                             width:65px;
                             margin: 5px 0px 5px 0px;
                        }
                      </style>";
                        $data = file_get_contents("datos.json");//obtener datos de archivo json
                        $recorridos = json_decode($data, true);//descodifique el JSON usando json_decode() 
                        $i=0;
                       foreach ($recorridos as $recorrido) {
                           if($recorridos[$i]['id_vehiculo']==$codV)
                           {
                               //print_r($recorridos[$i]['id_vehiculo']+"\n");
                               $array = array_values( $recorridos[$i]['clientes']);
                               //print_r($array);
                            }
                          $i++;
                        }
                        $longitud = count($array);
                        $origen=$array[0]['latitud'].", ". $array[0]['longitud'];
                        $destino=$array[1]['latitud'].", ". $array[1]['longitud'];
                        if($longitud<=1){
                            echo"
                                <html>
                                     <head>
                                          <meta http-equiv='REFRESH' content='0;url=consultarRecorridos.php'>
                                          <script>
                                                  alert('No hay recorrido para mostrar');
                                          </script>
                                     </head>
                                </html>";
                        }
                        
                        //print_r($lat_long);
                        //saco el numero de elementos

                        $direcciones="";
                        //Recorro todos los elementos
                        for($i=2; $i<$longitud; $i++)
                        {
                              //saco el valor de cada elemento
                            if($i<$longitud-1)
                                $direcciones.="{location:'".$array[$i]['latitud'].", ".$array[$i]['longitud']."'},";
                            else
                                $direcciones.="{location:'".$array[$i]['latitud'].", ".$array[$i]['longitud']."'}";
                        }
                    echo"<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCYC3YbDgBhdhmF3s2v6gwIUOddaNYUDiM&callback=initMap'> </script>
                    var rendererOptions = {
                       draggable: false
                    };
                    var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
                    var directionsService = new google.maps.DirectionsService();
                    var map;

                    var posPpal = new google.maps.LatLng($origen);

                    function initialize() {

                      var mapOptions = {
                      zoom: 17,
                      center: posPpal
                      };
                      map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
                      directionsDisplay.setMap(map);
                      directionsDisplay.setPanel(document.getElementById('directionsPanel'));

                      google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
                          computeTotalDistance(directionsDisplay.getDirections());
                          });

                      calcRoute();
                    }

                    function calcRoute() {
                      var request = {
                       origin:'$origen',
                       destination:'$destino',
                       waypoints:[$direcciones],

                       travelMode: google.maps.TravelMode.WALKING
                      };
                      directionsService.route(request, function(response, status) {
                          if (status == google.maps.DirectionsStatus.OK) {
                          directionsDisplay.setDirections(response);
                          }
                          });
                    }

                    function computeTotalDistance(result) {
                      var total = 0;
                      var myroute = result.routes[0];
                      for (var i = 0; i < myroute.legs.length; i++) {
                        total += myroute.legs[i].distance.value;
                      }
                      total = total / 1000.0;
                      document.getElementById('total').innerHTML = total + ' km';
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                  </head>
                  <body>
                      <div style='z-index: 3;'>
                        <div id='header'>
                             <h1>Sistema de Gestón de Transporte</h1>
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
                                        <li><a href='#'>Recorridos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <br/><br/><br/><br/>";
                        include "conexion.php";
                        echo"<form id='frmC' method='post' action='mostrarRecorrido.php' onsubmit='return validar(selectV)'>
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
                             if(isset($_POST['consultar'])){
                                  $codV=$_POST['codigoV'];
                                 echo"</br>
                                     <div id='mapa' style='width:100%; height:69%'></div>
                                     ";
                             }
                             echo"</div>
                        <div id='footer'>© Desarrollado por UNPA-UACO
                        </div>
                  </body>
</html>";
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
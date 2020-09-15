<?php
session_start();
$user=$_SESSION['user'];
$tipoUser=$_SESSION['tipo'];
$pass=$_SESSION['pass'];
if($user AND $tipoUser){
    $codV=$_POST['codigoV'];
    $codV=$_Post['codigoP'];

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
                                     <div id='mapa' style='width:100%; height:69%'></div>";
                             }
    include "footer.php";
}
else{
  include "cerrarsesion.php"; 
 }   
?>
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
                      </style>
                  </head>
                  <body>
                      <div style='z-index: 3;'>
                        <div id='header'>
                             <h1>Sistema de Gestión de Transporte</h1>
                             <ul id='navmenu'>
                                <li><a href='#'>Perfil</a><span class='darrow'>&#9660;</span>
                                    <ul class='sub1'>
                                        <li id='imagenPerfil'><a href='#'><img src='../img/user.jpg' alt='#' title='#'/>$tipoUser</a></li>
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
                        </div>
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

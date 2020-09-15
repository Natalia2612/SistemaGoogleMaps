<?php
echo"
         <html>
              <head>
                      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'></meta>
                      <meta name='Author'  content='Alancay Natalia'></meta>
                      <title>.::Sistema de Transporte::.</title>
                      <link rel='shortcut icon' href='../img/iconTransporte.png' type='image/x-icon' />
                      <link rel='stylesheet' href='../css/styles.css'/>
                      <script type='text/javascript' language='javasript' src='../js/js_validaciones.js'></script>
                  </head>
                  <body>
                    <div id='header' class='container'>
                        <h1>Sistema de Gestión de Transporte</h1>
                        <ul id='navmenu' class='menu1'>
                            <li class='menu1__item'><a href='#'>Perfil</a><span class='darrow'>&#9660;</span>
                                <ul class='menu2' >
                                    <li class='menu2__subItems2' id='imagenPerfil'><a href='#'><img src='../img/user.png' alt='#' title='#'/>$tipoUser</a></li>
                                    <li class='menu2__subItems2'><a href='cerrarsesion.php'>Cerrar sesión</a></li>
                                </ul>
                            </li>
                            <li class='menu1__item'><a href='#'>Administrar</a><span class='darrow'>&#9660;</span>
                                <ul class='menu2'>
                                    <li class='menu2__subItems2'><a href='adminCliente.php'>Clientes</a></li>
                                    <li class='menu2__subItems2'><a href='adminVehiculo.php'>Vehiculos</a></li>
                                    <li class='menu2__subItems2'><a href='#'>Plan de viaje</a><span class='rarrow'>&#9654;</span>
                                    <ul class='menu3'>
                                        <li class='menu3__subItems3'><a href='planDeLista.php'>Por Clientes</a></li>
                                    </ul>
                                </ul>
                            </li>      
                            <li class='menu1__item'><a href='#'>Consultar</a><span class='darrow'>&#9660;</span>
                                <ul class='menu2'>
                                    <li class='menu2__subItems2'><a href='consultarRecorridos.php'>Recorridos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>";
?>
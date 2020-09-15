<?php
session_start();
$user=$_SESSION['user'];
$tipoUser=$_SESSION['tipo'];
$pass=$_SESSION['pass'];
if($user AND $tipoUser){
     include "menu.php";
     include "footer.php";
}
else{
  include "cerrarsesion.php";
 }   
?>

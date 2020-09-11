<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
    include("conexion.php");
    $consulta=mysqli_query($conexion,"SELECT * FROM usuario u where u.nomUser='".$user."' and u.pass='".$pass."'");
    $fila=mysqli_fetch_array($consulta);
        $nomUser=$fila['nomUser'];
        $passUser=$fila['pass'];
        $tipoUser=$fila['tipo'];

        if($user==$nomUser AND $pass==$passUser AND $user!='' AND $pass!=''){
            session_start();
            $_SESSION['user']=$nomUser;
            $_SESSION['pass']=$passUser;
            $_SESSION['tipo']=$tipoUser;
            echo"
                <html>
                   <head>
                        <meta http-equiv='REFRESH' content ='0; url=secundaria.php'>
                        <script>
                           alert('BIENVENIDO AL SISTEMA DE TRANSPORTE');
                        </script>
                   </head>
                </html>
                ";
        }else{
            echo"
                <html>
                   <head>
                        <meta http-equiv='REFRESH' content ='0; url=../'>
                        <script>
                           alert('El nombre de usuario y/o contraseña son incorrectos');
                        </script>
                   </head>
                </html>
                ";
        }
?>
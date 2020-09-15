<!DOCTYPE html>
<html>
     <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'></meta>
        <meta name='Author'  content='Alancay Natalia'></meta>
        <title>.::Sistema de Transporte::.</title>
        <link rel='shortcut icon' href='../img/iconTransporte.png' type='image/x-icon' />
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
        <body>
            <div class='login-box'>
                <img src="img/login_icon.png" class="avatar" alt="Avatar Image">
                <h1>Sistema de Gestión de Transporte</h1>
                <h1>Login Here</h1>
                <form id='frmC' name='frmC' method='POST' action="file/comprobarUser.php" onsubmit="return validarFormIndex(this)">
                    <div class="form-input">
                        <!-- USERNAME INPUT -->
                        <input type="text" id="campoUser" name="user" placeholder="Enter Username"/>
                    </div>
                    <div class="form-input">
                        <!-- PASSWORD INPUT -->
                        <input type="password" id="campoPass" name="pass" placeholder="Enter Password"/>
                    </div>
                    <input type="submit" class="btn" value="Log In">
                </form>
            </div>
            <div id='footer'>© Desarrollado por Natalia Alancay</div>
    </body>
</html>
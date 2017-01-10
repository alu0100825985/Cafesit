<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <title>Cafesit</title>
  </head>
  <body>
    <div class="contenedor-pantalla">
        <div class="contenedor-logo" id="contenedor-logo"><div id="logo"></div></div>
        <div class="contenedor-accesos">
            <form method="POST">
                <input type="text" name="correo" id="correo" placeholder="Correo" autocomplete="off"></input>
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" autocomplete="off"></input>
                <input type="submit" name="iniciar" id="iniciar" value="Iniciar sesión"></input>
                <div id="pregunta-registrar">¿No tienes cuenta? <a href="registrar.php">Regístrate</a></div>
            </form>
            <?php
                if(isset($_POST['iniciar'])) {
                    require("php/iniciar_sesion.php");
                }
            ?>
        </div>
        <div class="contenedor-logo-ull"></div>
    </div>
  </body>
</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/valorar.js"></script>
    <title>Cafesit</title>
  </head>
  <body>
    <div class="contenedor-pantalla">
      <nav role="navigation" class="navbar navbar-default"> <!-- BARRA DE NAVEGACIÓN SUPERIOR -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="contenedor-titulo">RECOMENDACIÓN</div>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="perfil_personal.php"><img src="images/usuario.png" />&nbsp Perfil personal</a></li>
                <li><a href="valorar.php"><img src="images/estrella.png" />&nbsp Valoraciones</a></li>
                <li><a href="#"><img src="images/taza-de-te.png" />&nbsp Recomendación</a></li>
                <li class="cerrar-sesion-collapse"><a href="php/cerrar_sesion.php"><img src="images/boton-de-apagado.png" />&nbsp Cerrar sesión</a></li>
            </ul>
        </div>
      </nav> <!-- FIN BARRA DE NAVEGACIÓN SUPERIOR -->
      <div class="contenedor-contenido"></div>
    </div>
  </body>
</html>
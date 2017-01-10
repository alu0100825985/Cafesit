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
            <div class="contenedor-titulo">VALORACIONES</div>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="perfil_personal.php"><img src="images/usuario.png" />&nbsp Perfil personal</a></li>
                <li><a href="#"><img src="images/estrella.png" />&nbsp Valoraciones</a></li>
                <li><a href="recomendar.php"><img src="images/taza-de-te.png" />&nbsp Recomendación</a></li>
                <li class="cerrar-sesion-collapse"><a href="php/cerrar_sesion.php"><img src="images/boton-de-apagado.png" />&nbsp Cerrar sesión</a></li>
            </ul>
        </div>
      </nav> <!-- FIN BARRA DE NAVEGACIÓN SUPERIOR -->
      <div class="contenedor-contenido">
        <div class="contenedor-añadir-comentario">
          <div class="contenedor-titulo-añadir-comentario">Añadir valoración</div>
          <div class="contenedor-nombres-platos" id="contenedor-nombres-platos">
            <?php require("php/mostrar_platos.php"); ?>
          </div>
          <div class="contenedor-enviar-comentario">
            <div class="contenedor-titulo-enviar-comentario">
              Nuevo comentario de <?php echo $_SESSION['correo']; ?>
            </div>
            <div class="contenedor-plato-fecha">
              <div class="contenedor-input">
                <input type="text" placeholder="Nombre del plato" id="nombre-plato" name="nombre-plato"></input>
                <input type="date" id="fecha-plato" name="fecha-plato"></input>
              </div>
            </div>
            <div class="contenedor-comentario">
              <div class="contenedor-textarea">
                <textarea type="text" placeholder="Comentario" id="comentario-plato" name="comentario-plato"></textarea>
              </div>
            </div>
            <div class="contenedor-estrellas-enviar">
              <div class="contenedor-estrellas">
                <div class="span-estrellas">
                  <span class="starRating">
                    <input id="rating5" type="radio" name="rating" value="5">
                    <label for="rating5">5</label>
                    <input id="rating4" type="radio" name="rating" value="4">
                    <label for="rating4">4</label>
                    <input id="rating3" type="radio" name="rating" value="3" checked>
                    <label for="rating3">3</label>
                    <input id="rating2" type="radio" name="rating" value="2">
                    <label for="rating2">2</label>
                    <input id="rating1" type="radio" name="rating" value="1">
                    <label for="rating1">1</label>
                  </span>
                </div>
              </div>
              <div class="contenedor-boton-enviar-opinion">
                <div class="contenedor-input">
                  <input type="submit" id="enviar-comentario" name="enviar-comentario" value="Enviar comentario"></input>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/perfil_personal.js"></script>
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
            <div class="contenedor-titulo">PERFIL PERSONAL</div>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><img src="images/usuario.png" />&nbsp Perfil personal</a></li>
                <li><a href="valorar.php"><img src="images/estrella.png" />&nbsp Valoraciones</a></li>
                <li><a href="recomendar.php"><img src="images/taza-de-te.png" />&nbsp Recomendación</a></li>
                <li class="cerrar-sesion-collapse"><a href="php/cerrar_sesion.php"><img src="images/boton-de-apagado.png" />&nbsp Cerrar sesión</a></li>
            </ul>
        </div>
      </nav> <!-- FIN BARRA DE NAVEGACIÓN SUPERIOR -->
      <div class="contenedor-contenido">
        <div class="contenedor-imagen-cafeteria"></div>
        <div class="contenedor-informacion-perfil">
            <div class="contenedor-perfil">
                <div class="contenedor-nombre-imagen">
                    <div class="contenedor-imagen-<?php echo $_SESSION['sexo']; ?>"></div>
                    <div class="contenedor-nombre">
                        <?php echo $_SESSION['nombre-completo']; ?>
                    </div>
                </div>
                <div class="contenedor-resto-informacion">
                    <div class="contenedor-informacion">
                        <div class="contenedor-informacion-correo"><?php echo $_SESSION['correo']; ?></div>
                        <div class="contenedor-informacion-telefono"><?php echo $_SESSION['telefono']; ?></div>
                        <div class="contenedor-informacion-contraseña">
                            <div class="contenedor-input">
                                <div class="contenedor-input-contrasena">
                                    <input type="password" id="nueva-contrasena" name="nueva-contrasena" placeholder="Nueva contraseña"></input>
                                </div>
                                <div class="contenedor-boton-contrasena">
                                    <input type="submit" id="cambiar-contrasena" name="cambiar-contrasena" value="Cambiar"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenedor-informacion-comentarios">
            <div class="contenedor-informacion">
                <div class="contenedor-numero-comentarios">
                    <?php echo $_SESSION['numero-comentarios']; ?>
                </div>
                <div class="contenedor-fecha-comentario">
                    <text>comentarios aportados</text>
                    FECHA ÚLTIMO COMENTARIO: <?php echo $_SESSION['ultimo-comentario']; ?></br>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>

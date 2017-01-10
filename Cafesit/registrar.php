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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/registrar.js"></script>
    <title>Cafesit</title>
  </head>
  <body>
    <div class="contenedor-pantalla">
        <div class="contenedor-titulo-registrar">REGISTRO</div>
        <div class="contenedor-contenido-registrar">
            <form method="POST">
                <div class="contenedor-input">
                    <div class="contenedor-input-nombre">
                        <label>Nombre</label></br>
                        <input type="text" name="nombre" id="nombre" autocomplete="off"></input>
                    </div>
                    <div class="contenedor-input-apellidos">
                        <label>Apellidos</label></br>
                        <input type="text" name="apellidos" id="apellidos" autocomplete="off"></input>
                    </div>
                </div>
                <div class="contenedor-input">
                    <label>Correo</label></br>
                    <input type="text" name="correo" id="correo" autocomplete="off"></input>
                </div>
                <div class="contenedor-input">
                    <div class="contenedor-input-sexo">
                        <label>Sexo</label></br>
                        <label class="radio-inline"><input type="radio" name="sexo" value="Hombre"></input>Hombre</label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="Mujer"></input>Mujer</label>
                    </div>
                    <div class="contenedor-input-fecha">
                        <label>Fecha de nacimiento</label></br>
                        <input type="date" name="fecha-nacimiento" id="fecha-nacimiento" autocomplete="off"></input>
                    </div>
                </div>
                <div class="contenedor-input">
                    <label>Teléfono</label></br>
                    <input type="text" name="telefono" id="telefono" autocomplete="off"></input>
                </div>
                <div class="contenedor-input">
                    <label>Contraseña</label></br>
                    <input type="password" name="contrasena" id="contrasena" autocomplete="off"></input>
                </div>
                <input type="submit" name="registrar" id="registrar" value="Registrarse"></input>
            </form>
            <?php
                if(isset($_POST['registrar'])) {
                    require("php/registrar_usuario.php");
                }
            ?>
        </div>
    </div>
  </body>
</html>
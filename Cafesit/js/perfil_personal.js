// DOCUMENTO JAVASCRIPT DE perfil_personal.php

$(document).ready(function() {

    $("#cambiar-contrasena").click(function() {
        enviar_cambiar_contrasena();
    });
});

function enviar_cambiar_contrasena() { // Función para enviar los valores del cambio de contraseña.
    
    var nueva_contrasena = $("#nueva-contrasena").val(); 

    $.ajax({
        type: 'POST',
        url: 'http://localhost/Cafesit/php/cambiar_contraseña.php',
      	data: "nueva_contrasena="+nueva_contrasena,
        dataType: 'json',
    });

    vaciar_enviar_contrasena();
}

function vaciar_enviar_contrasena() { // Función para restablecer los input cuando se cambia de contraseña.

    document.getElementById('cambiar-contrasena').value = "Cambiando...";
    setTimeout(function() { 
        document.getElementById('nueva-contrasena').value = "";
        document.getElementById('cambiar-contrasena').value = "Cambiar";
    }, 1500);
}
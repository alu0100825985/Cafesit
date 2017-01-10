// DOCUMENTO JAVASCRIPT DE valorar.php

$(document).ready(function() {

	document.getElementById('fecha-plato').value = obtener_fecha_actual();

	$("#enviar-comentario").click(function() {
		enviar_datos_comentario();
		$("#contenedor-nombres-platos").load('php/mostrar_platos.php');
	});
});

function insertar_plato(id_columna) { // Función para insertar el nombre del plato haciendo click.

	plato = document.getElementById(id_columna);
	document.getElementById('nombre-plato').value = plato.innerHTML;
}

function enviar_datos_comentario() {
    
    var plato        = $("#nombre-plato").val(); 
    var fecha        = $("#fecha-plato").val();
    var comentario   = $("#comentario-plato").val();
    var estrellas    = estrella_seleccionada();

    $.ajax({
        type: 'POST',
        url: 'http://localhost/Cafesit/php/enviar_comentario.php',
      	data: "plato="+plato+"&fecha="+fecha+"&comentario="+comentario+"&estrellas="+estrellas,
        dataType: 'json',
    });

    vaciar_enviar_comentario();
}

function estrella_seleccionada() { // Función para obtener la estrella seleccionada.

	var seleccionado;

	for (i = 1; i < 5; i++) {
		var indicador = "rating" + i;
		if(document.getElementById(indicador).checked) {
  			seleccionado = document.getElementById(indicador).value;
  		}
  		else {
  			seleccionado = 3; // Establecemos las 3 estrellas por defecto.
  		}
  	}

  	return seleccionado;
}

function obtener_fecha_actual() { // Función para obtener la fecha actual.

	var fecha_actual = new Date();
	var dd           = fecha_actual.getDate();
	var mm           = fecha_actual.getMonth() + 1; 
	var aaaa         = fecha_actual.getFullYear();

	if(dd < 10) {
    	dd = '0' + dd;
	} 

	if(mm < 10) {
    	mm = '0' + mm;
	} 

	fecha_actual = aaaa + '-' + mm + '-' + dd;

	return fecha_actual;
}

function vaciar_enviar_comentario() { // Funcion para vaciar los input de envío de comentario.

	document.getElementById('enviar-comentario').value = "Enviando...";
	setTimeout(function() { 
		document.getElementById('nombre-plato').value = "";
		document.getElementById('fecha-plato').value = obtener_fecha_actual();
		document.getElementById('comentario-plato').value = "";
		document.getElementById('enviar-comentario').value = "Enviar comentario";
	}, 1500);

}
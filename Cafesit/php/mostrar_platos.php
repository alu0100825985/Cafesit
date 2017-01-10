<?php 
	
require("conectar_database.php");

$contador_fila = 0;
$dia_actual = getdate();
$dd         =  $dia_actual['mday'];
$mm         =  $dia_actual['mon'];
$aaaa       =  $dia_actual['year'];

if($dd < 10) { // Añadimos un 0 delante para que tenga el mismo formato que la FECHA SQL.
	$dd = "0" . $dd;
}

if($mm < 10) {
	$mm = "0" . $mm;
}

$fecha_actual = $dd . "-" . $mm . "-" . $aaaa; 

$consulta  = "SELECT DISTINCT PLATO, date_format(FECHA, '%d-%m-%Y')
			  FROM `VALORACION`
			  ORDER BY FECHA DESC;";

$resultado = mysql_query($consulta); 
 
echo "<table class='tabla-platos' id='tabla-platos'>
		<thead>
		  <tr>
		  	<th>NOMBRE DEL PLATO</th>
		  	<th>FECHA</th>
		  </tr>
	  	</thead>";
echo "	<tbody>";
while ($row = mysql_fetch_row($resultado)) { 
	if($row[1] == $fecha_actual) {
		echo "<tr id='fila-fecha-actual'>
				<td id='$contador_fila' onclick=insertar_plato('$contador_fila')>$row[0]</td>
				<td>$row[1]</td>
			  </tr> \n"; 
	}
	else {
		echo "<tr>
				<td id='$contador_fila' onclick=insertar_plato('$contador_fila')>$row[0]</td>
				<td>$row[1]</td>
			  </tr> \n"; 
	}

	$contador_fila++;
}
echo "	</tbody>
	  </table>";

?>
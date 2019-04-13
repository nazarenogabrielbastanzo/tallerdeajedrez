<?php
require_once 'config.php';
@ $enlace = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($enlace) {
    mysqli_set_charset($enlace, 'utf8');
    $consulta = "SELECT * FROM partidas ORDER BY evento";
    $resultado = mysqli_query($enlace, $consulta);
	if (!$resultado) {
	    die('Hubo un error al procesar la petición.');
	}
} else {
    die('No se pudo conectar a la base de datos.');
}
mysqli_close($enlace);
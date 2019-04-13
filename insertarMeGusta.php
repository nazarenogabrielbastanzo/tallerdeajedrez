<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'):
	require_once 'admin/config.php';
	$partida_id = $_POST['partidaID']; // viene del JSON de AJAX de partida.php
	$cantidad = $_POST['cantidad']; // viene del JSON de AJAX de partida.php
	//Añadiendo lógica:
	if ($cantidad == PHP_INT_MAX) {
		$cantidad = 0;
	}
	$cantidad += 1;
		
	@ $enlace = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if ($enlace) {
		mysqli_set_charset($enlace, 'utf8');
		$consulta = "UPDATE partidas SET meGusta = '$cantidad' WHERE partidas.partida_id = $partida_id;"; //
		$resultado = mysqli_query($enlace, $consulta);
		if (!$resultado) {
			die('Hubo un error al procesar la petición.');
		}
	} else {
		die('No se pudo conectar a la base de datos.');
	}
	mysqli_close($enlace);
endif;
?>
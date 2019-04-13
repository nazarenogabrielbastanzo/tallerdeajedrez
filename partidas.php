<?php
require_once 'admin/sql_connection.php';
$cantidad_de_partidas = mysqli_num_rows($resultado);
if ($cantidad_de_partidas > 0) {
    include 'partidas_tabla.php';
} else {
	echo '<p>No se encontró ninguna partida en esta sección.</p>';
}
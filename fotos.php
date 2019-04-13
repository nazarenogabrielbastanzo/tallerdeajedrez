<?php
require_once 'admin/sql_albums.php';
$cantidadDeAlbums = mysqli_num_rows($resultado);
if ($cantidadDeAlbums > 0) {
    include 'fotos_torneos_tabla.php';
} else {
	echo '<p>No se encontró ningún album en esta sección.</p>';
}
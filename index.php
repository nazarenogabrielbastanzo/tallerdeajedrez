<?php
include 'cabecera.php'; // Se incluye la cabecera.
/**
 * Luego inserto las partes restantes de las páginas solicitadas al servidor.
 */

if (isset($_GET['page'])) { // Si existe page como parámetro get
	include "{$_GET['page']}.php"; // Lo inserto, con su correspondiente extensión
} else { // Sino
	include 'inicio.php'; // Inserto la página principal
}
// Luego el pie de página.
include 'pie.php';
?>

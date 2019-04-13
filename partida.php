<?php
if (isset($_GET['partida']) && isset($_GET['blancas']) && isset($_GET['negras']) && isset($_GET['resultado']) && isset($_GET['partida_id'])) {
	$partida = $_GET['partida'];
	$blancas = $_GET['blancas'];
	$negras = $_GET['negras'];
	$resultado = $_GET['resultado'];
	$partida_id = $_GET['partida_id'];
}
?>

<?php
require_once 'admin/config.php';
@ $enlace = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($enlace) {
    mysqli_set_charset($enlace, 'utf8');
$consulta = "SELECT * FROM partidas WHERE partida_id = $partida_id";
    $rs = mysqli_query($enlace, $consulta);
	if (!$rs) {
	    die('Hubo un error al procesar la petición.');
	}
} else {
    die('No se pudo conectar a la base de datos.');
}
mysqli_close($enlace);

?>

<?php if ($reg = mysqli_fetch_assoc($rs)): ?>

<div class="w3-container w3-padding">
	<h2><?= "$blancas vs. $negras <br>[$resultado]"; ?></h2>
	<div class="w3-center">
		<iframe src="<?= $partida; ?>" width="600" height="397" frameborder="0">	
			<p>Su navegador no soporta iframes...</p>
		</iframe>
	</div>
</div>

<?php endif; ?>

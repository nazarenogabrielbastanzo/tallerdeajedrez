<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<?php foreach($partidas as $p): ?>
<div class="container mt-3">
	<h4><?= "{$p['blancas']} vs. {$p['negras']} <br>[{$p['resultado']}]"; ?></h4>
	<hr>
	<div>

<?php // 21:9 aspect ratio ?>
<div class="embed-responsive embed-responsive-21by9">
  	<iframe class="embed-responsive-item" src="<?= $p['vinculo']; ?>">
  		<p>Su navegador no soporta iframes...</p>
	</iframe>
</div>

	</div>
</div>

<?php endforeach; ?>
<?php
$this->load->view('footer_view');
?>
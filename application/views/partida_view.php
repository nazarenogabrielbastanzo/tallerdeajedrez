<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<?php foreach($partida as $p): ?>

<?php
function quienGana($p) {
	switch ($p['resultado']) {
		case '1 - 0':
			return "(Ganan las blancas)";
			break;
		case '0 - 1':
			return "(Ganan las negras)";
			break;
		case '1/2 - 1/2':
			return "(Empate)";
			break;
	}
}
?>

<div class="container-fluid">
	<div class="row">
		
	<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 align-self-center flecha">
<?php if( $p['partida_id'] > 1 ): ?>
		<a href="<?php echo base_url('partida-') . (int)($p['partida_id'] - 1); ?>">
			<img src="<?php echo base_url('assets/img/icons/back.png'); ?>" alt="Partida anterior" data-toggle="tooltip" data-placement="bottom" title="Partida anterior">
		</a>
<?php endif; ?>
	</div>

		<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
			<h4><?php echo $current; ?></h4>
		<h5><?php echo "{$p['blancas']} vs. {$p['negras']}"; ?>&nbsp;<?php echo quienGana($p); ?>
	</h5>
			<hr>
			<div>
				<?php // 21:9 aspect ratio ?>
				<div class="embed-responsive embed-responsive-21by9">
					<iframe class="embed-responsive-item" src="<?php echo "https://lichess.org/embed/{$p['vinculo']}"; ?>">
						<p>Su navegador no soporta iframes...</p>
					</iframe>
				</div>
			</div>
		</div>
		
		<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 align-self-center flecha">
<?php if( ($p['partida_id'] + 1) <= sizeof($games) ): ?>
		<a href="<?php echo base_url('partida-') . (int)($p['partida_id'] + 1); ?>">
			<img src="<?php echo base_url('assets/img/icons/next.png'); ?>" alt="Partida siguiente" data-toggle="tooltip" data-placement="bottom" title="Partida siguiente">
		</a>
<?php endif; ?>
		</div>
		
	</div>
</div>

<?php endforeach; ?>
<?php
$this->load->view('footer_view');
?>

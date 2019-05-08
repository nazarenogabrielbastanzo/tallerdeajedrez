<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<?php foreach ($partida as $p) : ?>

	<?php
	function quienGana($p)
	{
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


			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mx-auto">
				<div class="clase1">
					<h4><?php echo $current; ?></h4>
					<h5><?php echo "{$p['blancas']} vs. {$p['negras']}"; ?>&nbsp;<?php echo quienGana($p); ?>
					</h5>
					<hr>
				</div>

				<div class="clase2">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item" src="<?php echo "https://lichess.org/embed/{$p['vinculo']}"; ?>" width="600" height="397">
							<p>Su navegador no soporta iframes...</p>
						</iframe>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php endforeach; ?>
<?php $this->load->view('footer_view'); ?>
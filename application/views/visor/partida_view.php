<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>

	<div class="container">

		<div id="GameBoard"></div>
		<div id="GameButtons"></div>
		<div id="GameEvent"></div>
		<div id="GameDate"></div>
		<div id="GameWhite"></div>
		<div id="GameBlack"></div>
		<div id="GameResult"></div>

	</div>

	<script src="<?php echo base_url('pgn4web.js'); ?>" type="text/javascript"></script>
	<script>
		SetPgnUrl("<?php echo base_url('assets/partidas/'); ?><?php echo $id; ?>.pgn");
	</script>
<?php $this->load->view('footer_view'); ?>
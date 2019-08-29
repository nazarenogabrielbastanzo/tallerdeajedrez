<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<div class="container-fluid">
  <h4>Partida <?php echo $id;?></h4>
  <div class="text-center">
    <button onclick="removerMenu()" class="btn btn-outline-primary">Ocultar Menu</button>
    <button onclick="mostrarMenu()" class="btn btn-outline-primary">Mostrar Menu</button>
  </div>
  <div class="visor2">
    <div class="container">

      <div id="GameBoard" style="display: inline-block; border: 1px solid black;"></div>
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
  </div>

  <div class="cbreplay" data-url="<?php echo base_url('assets/partidas/'); ?><?php echo $id; ?>.pgn">
  </div>
</div>

<script>
  var visor_cbr = document.querySelector('.cbreplay');
  var visor_pgn4web = document.querySelector('.visor2');

  if (screen.width < 1024) {
    visor_cbr.style.display = 'none';
    visor_pgn4web.style.display = 'block';
  } else {
    visor_cbr.style.display = 'block';
    visor_pgn4web.style.display = 'none';
  }
</script>
<?php $this->load->view('footer_view'); ?>
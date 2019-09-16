<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
$this->load->view('header_view');
$this->load->view('menu_view');
?>
<div class="container-fluid" style="margin-top: 150px;">
  <h4 style="text-align: center;"
    class="mb-5">Partida <?php echo $id;?></h4>
  <div class="custom-control custom-switch" style="text-align: center;">
    <input type="checkbox" class="custom-control-input" id="ocultarMenu">
    <label class="custom-control-label" for="ocultarMenu">Ocultar Menu</label>
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

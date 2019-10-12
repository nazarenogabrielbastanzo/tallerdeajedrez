<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('header_view');
$this->load->view('menu_view');
$titulo_del_torneo = 'FIDE Chesscom Grand Swiss 2019';
$link_del_torneo = 'https://live.chessbase.com/pgn/fide-chesscom-grand-swiss-2019/0';
?>

<div class="container" style="margin-top: 150px;">
  <div class="custom-control custom-switch" style="text-align: center;">
    <input type="checkbox" class="custom-control-input" id="ocultarMenu">
    <label class="custom-control-label" for="ocultarMenu">Ocultar Menu</label>
  </div>
  <div class="my-5">
    <div class="card shadow">
      <div class="card-header">
        <h4 style="text-align: center;"><?php echo $titulo_del_torneo; ?></h4>
      </div>
      <div class="card-body">
        <div style="width:900px; height: 600px; margin: auto;">
          <iframe src="<?php echo $link_del_torneo; ?>" width="900" height="600"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('footer_view'); ?>

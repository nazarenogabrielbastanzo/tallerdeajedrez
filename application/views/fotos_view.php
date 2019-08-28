<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
$data = file_get_contents(base_url('assets/fotos.json'));
$fotos = json_decode($data, true);
?>
<h4><?php echo $current; ?></h4>
<?php foreach ($fotos as $foto) : ?>
    <div class="container">
      <div class="my-5">
        <div class="card shadow">
          <div class="card-body">
						<p><b>ID: </b><?php echo $foto['album_id']; ?></p>
            <p><b>Torneo: </b><?php echo $foto['album']; ?></p>
            <p><b>Lugar: </b><?php echo $foto['lugar']; ?></p>
            <p><b>Fecha: </b><?php echo $foto['fecha']; ?></p>
            <p><b>Cantidad de Fotos: </b><?php echo $foto['cantidadFotos']; ?></p>
            <div class="text-center">
              <button class="btn btn-outline-primary" onclick="window.location.assign('<?php echo base_url('fotos') . '/' . $foto['album_id']; ?>');">Ver Fotos</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
<?php
$this->load->view('footer_view');
?>
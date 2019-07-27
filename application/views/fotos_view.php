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
              <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal<?php echo $foto['album_id']; ?>">Ver Fotos</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal<?php echo $foto['album_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal<?php echo $foto['album_id']; ?>Label" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal<?php echo $foto['album_id']; ?>Label"><?php echo $foto['album']; ?></h5>
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex justify-content-center">
            <div id="carouselExampleControls<?php echo $foto['album_id']; ?>" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner <?php echo $foto['album_id']; ?>">
                <!-- Se inserta mediante script de jQuery -->
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $foto['album_id']; ?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls<?php echo $foto['album_id']; ?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
      var carouselInner = $('.carousel-inner.<?php echo $foto['album_id'] ?>');
      carouselInner.append($('<div class="carousel-item active"><img src="<?php echo base_url('assets/img'); ?>/<?php echo $foto['vinculo']; ?>(1).jpg" alt="Una imagen"></div>'));
      for (let i = 2; i <= <?php echo $foto['cantidadFotos']; ?> ; i++) {
        carouselInner.append($('<div class="carousel-item"><img src="<?php echo base_url('assets/img'); ?>/<?php echo $foto['vinculo']; ?>(' + i + ').jpg" alt="Una imagen"></div>'));
      }
    </script>
  <?php endforeach; ?>
<?php
$this->load->view('footer_view');
?>
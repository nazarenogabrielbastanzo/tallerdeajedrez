<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('header_view');
$this->load->view('menu_view');
$data = file_get_contents(base_url('assets/fotos.json'));
$fotos = json_decode($data, true);
?>
<div class="container" style="margin-top: 150px;">
	<h4 style="text-align: center; margin-bottom: 25px;">
		<?php echo $current; ?>
	</h4>
	<div class="custom-control custom-switch" style="text-align: center;">
    <input type="checkbox" class="custom-control-input" id="ocultarMenu">
    <label class="custom-control-label" for="ocultarMenu">Ocultar Menu</label>
  </div>
	<div class="d-flex justify-content-center">
		<div id="carouselExampleControls<?php echo $id; ?>" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner <?php echo $id; ?>">
		    <!-- Se inserta mediante script de jQuery -->
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $id; ?>" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls<?php echo $id; ?>" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
		  </a>
		</div>
	</div>
	<div style="margin-top: 50px;">
	</div>
</div>
<script>
  var carouselInner = $('.carousel-inner.<?php echo $id; ?>');
  carouselInner.append($('<div class="carousel-item active divresponsivo"><img src="<?php echo base_url('assets/img'); ?>/<?php echo $fotos[$id-1]['vinculo']; ?>(1).jpg" alt="Una imagen" class="imgresponsiva rounded"></div>'));
  for (let i = 2; i <= <?php echo $fotos[$id-1]['cantidadFotos']; ?> ; i++) {
    carouselInner.append($('<div class="carousel-item divresponsivo"><img src="<?php echo base_url('assets/img'); ?>/<?php echo $fotos[$id-1]['vinculo']; ?>(' + i + ').jpg" alt="Una imagen" class="imgresponsiva rounded"/></div>'));
  }
</script>

<?php
$this->load->view('footer_view');
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$visita = $this->VM->getVisitas()[0]['visitas'] + 1;
$this->VM->updateVisitas($visita);

?>

<?php // Modal: ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <p><i class="fas fa-check tilde"></i><a href="<?= base_url(index_page().'contacto'); ?>">Formulario de contacto</a></p>
            <p><i class="fas fa-check tilde"></i><a href="https://www.facebook.com/TallerDeAjedrez">Taller de Ajedrez en Facebook</a></p>
            <p><i class="fas fa-check tilde"></i><a href="https://twitter.com/TallerdeAjedre2">Taller de Ajedrez en Twitter</a></p>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?php // :Modal ?>

<?php // Botón arriba: ?>
<div class="container">
  <div class="row justify-content-end">
    <button class="btn btn-outline-primary" id="boton-top">Ir arriba</button>
  </div>
</div>
<?php // :Botón arriba ?>

<footer>
  <div class="py-5">
    <h6 class="text-center"><em><a href="<?php echo base_url(index_page()); ?>">Taller de Ajedrez</a></em></h6>
  </div>
</footer>

<?php // *** Comienza la inclusión de los js *** ?>

<?php // Bootstrap JS (1ero. jQuery, 2do. Popper y 3ero. Bootstrap) ?>
<?php // jQuery está en el <head> ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<?php // Inclusión del script responsable de hacer el Slide de fotos: ?>
	<script  src="<?= base_url('assets/js/script.js'); ?>"></script>
<?php // :Inclusión del script responsable de hacer el Slide de fotos ?>

<?php // Combinación de teclas: ?>
<script>
  function KeyPress(e) {
    var evtobj = window.event? event : e;
    <?php // CTRL + ALT + I ?>
    if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 73) {
      window.location.assign('<?= base_url(index_page()); ?>');
    }
    <?php // CTRL + ALT + P ?>
    if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 80) {
      window.location.assign('<?= base_url('partidas/pagina-1'); ?>');
    }
    <?php // CTRL + ALT + F ?>
    if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 70) {
      window.location.assign('<?= base_url('fotos'); ?>');
    }
  }

  document.onkeydown = KeyPress;
</script>
<?php // :Combinación de teclas ?>

<?php // Togglea el menú para arriba o para abajo: ?>
<script src="<?php echo base_url('assets/js/hide_menu.js'); ?>"></script>
<?php // :Togglea el menú para arriba o para abajo ?>

<?php // Lleva al top de página: ?>
<script src="<?php echo base_url('assets/js/top-button.js'); ?>"></script>
<?php // :Lleva al top de página ?>

<?php // Script para efecto parallax: ?>
<?php if (isset($current) && $current == 'Inicio'): ?>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@4.0.0/dist/simpleParallax.min.js"></script>
<script>
  var parallaxImages = $('.parallaxImage');
  new simpleParallax(parallaxImages);
</script>
<?php endif; ?>
<?php // :Script para efecto parallax ?>

<?php // Para activar los tooltips: ?>
<script>
	$(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<?php // :Para activar los tooltips ?>

<?php // *** Fin de los scripts *** ?>

</body>
</html>
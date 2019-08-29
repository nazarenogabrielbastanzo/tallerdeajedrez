<?php
defined('BASEPATH') or exit('No direct script access allowed');


if (isset($_GET['fbclid']) && !empty($_GET['fbclid'])) {
  $vf = $this->VM->getVisitasFacebook()[0]['visitas_facebook'] + 1;
  $this->VM->updateVisitasFacebook($vf);  
} else {
  $visita = $this->VM->getVisitas()[0]['visitas'] + 1;
  $this->VM->updateVisitas($visita);
}

?>

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
        <p><i class="fas fa-check tilde"></i><a href="<?= base_url(index_page() . 'contacto'); ?>">Formulario de contacto</a></p>
        <p><i class="fas fa-check tilde"></i><a href="https://www.facebook.com/TallerDeAjedrez">Taller de Ajedrez en Facebook</a></p>
        <p><i class="fas fa-check tilde"></i><a href="https://twitter.com/TallerdeAjedre2">Taller de Ajedrez en Twitter</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compartir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="whatsapp://send?text=<?php echo current_url(); ?>" data-text="BOTÓN COMPARTIR EN WHATSAPP" data-action="share/whatsapp/share" class="whatsapp" style="border: none; margin: 10px 0; font-size: 16px;">
          <p><i class="fab fa-whatsapp"></i>
            Compartir en WhatsApp
          </p>
        </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-end">
    <button class="btn btn-outline-primary" id="boton-top">Ir arriba</button>
  </div>
</div>

<footer>
  <div class="py-5">
    <h6 class="text-center">
      <a href="<?php echo base_url('politicas-de-privacidad'); ?>">Políticas de Privacidad</a>
    </h6>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
  function KeyPress(e) {
    var evtobj = window.event ? event : e;
    <?php
    ?>
    if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 73) {
      window.location.assign('<?= base_url(index_page()); ?>');
    }
    <?php
    ?>
    if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 80) {
      window.location.assign('<?= base_url('partidas/pagina-1'); ?>');
    }
    <?php
    ?>
    if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 70) {
      window.location.assign('<?= base_url('fotos'); ?>');
    }
  }

  document.onkeydown = KeyPress;
</script>
<script src="<?php echo base_url('assets/js/hide_menu.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/top-button.js'); ?>"></script>

<?php if (isset($current) && $current == 'Inicio') : ?>
  <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@4.0.0/dist/simpleParallax.min.js"></script>
  <script>
    var parallaxImages = $('.parallaxImage');
    new simpleParallax(parallaxImages);
  </script>
<?php endif; ?>
<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>

</body>

</html>
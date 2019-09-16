<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
if (isset($_GET['fbclid']) && !empty($_GET['fbclid'])) {
  $vf = $this->VM->getVisitasFacebook()[0]['visitas_facebook'] + 1;
  $this->VM->updateVisitasFacebook($vf);
} else {
  $visita = $this->VM->getVisitas()[0]['visitas'] + 1;
  $this->VM->updateVisitas($visita);
}
?>
<section class="cid-qTkAaeaxX5"
  id="footer1-2">
  <div class="container">
    <div class="media-container-row content text-white">
      <div class="col-12 col-md-3">
        <div class="media-wrap">
          <a href="<?php echo base_url(index_page()); ?>">
            <img src="<?php echo base_url('assets/images/logo2-50x65.png'); ?>"
              alt="Inicio"
              title="Taller de Ajedrez"
              class="rounded">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-3 mbr-fonts-style display-7">
        <h5 class="pb-3">
          &nbsp;
        </h5>
        <p class="mbr-text">
          <a href="<?php echo base_url('politicas-de-privacidad'); ?>">
            Políticas de Privacidad
          </a>
        </p>
      </div>
    </div>
  </div>
</section>

  <script src="<?php echo base_url('assets/popper/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/smoothscroll/smooth-scroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/js/nav-dropdown.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/js/navbar-dropdown.js'); ?>"></script>
  <script src="<?php echo base_url('assets/viewportchecker/jquery.viewportchecker.js'); ?>"></script>
  <script src="<?php echo base_url('assets/parallax/jarallax.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/mbr-flip-card/mbr-flip-card.js'); ?>"></script>
  <script src="<?php echo base_url('assets/ytplayer/jquery.mb.ytplayer.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vimeoplayer/jquery.mb.vimeo_player.js'); ?>"></script>
  <script src="<?php echo base_url('assets/sociallikes/social-likes.js'); ?>"></script>
  <script src="<?php echo base_url('assets/touchswipe/jquery.touch-swipe.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>
  <!-- CBR: -->
	<script src="https://pgn.chessbase.com/cbreplay.js" type="text/javascript"></script>
	<!-- :CBR -->
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
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <script type="text/javascript">
    function removerMenu() {
      $('nav').hide('slow');
    }
    function mostrarMenu() {
      $('nav').show('slow');
    }

    setInterval(function() {
      if ($('#ocultarMenu').prop('checked')) {
        removerMenu();
      } else {
        mostrarMenu();
      }
    }, 250);
  </script>

 <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
   <a style="text-align: center;">
     <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up">
     </i>
   </a>
 </div>
 <input name="animation" type="hidden">
  </body>
</html>

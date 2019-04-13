<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php // Modal ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Contacto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><i class="fas fa-check tilde"></i>Pueden comunicarse con nosotros escribiendo un correo electrónico a: <a href="mailto:info@tallerdeajedrez.com.ar">info@tallerdeajedrez.com.ar</a></p>
				<p><i class="fas fa-check tilde"></i>O bien, completando el <a href="<?= base_url(index_page().'contacto'); ?>">formulario de contacto</a></p>
                <p><i class="fas fa-check tilde"></i><a href="https://www.facebook.com/TallerDeAjedrez">Taller de Ajedrez en Facebook</a></p>
                <p><i class="fas fa-check tilde"></i><a href="https://twitter.com/TallerdeAjedre2">Taller de Ajedrez en Twitter</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php // Inclusión del script responsable de hacer el Slide de fotos: ?>
	<script  src="<?= base_url('assets/js/script.js'); ?>"></script>
<?php // :Inclusión del script responsable de hacer el Slide de fotos ?>


<footer>
    <div class="py-5">
        <h4 class="text-center"><em>Taller de Ajedrez</em></h4>
    </div>
</footer>

<script>
    function KeyPress(e) {
        var evtobj = window.event? event : e
        if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 73) // CTRL + ALT + I
        {
            window.location.assign('<?= base_url(index_page()); ?>');
        }
        if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 80) // CTRL + ALT + P
        {
            window.location.assign('<?= base_url('partidas'); ?>');
        }
        if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 70) // CTRL + ALT + F
        {
            window.location.assign('<?= base_url('fotos'); ?>');
        }
    }

    document.onkeydown = KeyPress;
</script>

<script>
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('menu').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('menu').removeClass('sticky-top').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('menu').removeClass('nav-up').addClass('sticky-top');
            }
        }
        
        lastScrollTop = st;
    }
</script>

</body>
</html>
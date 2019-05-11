<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( isset( $_SESSION['user'] ) ) :
$this->load->view('header_view');
?>
<div class="container">
    <div class="my-5">
        <div class="card">
            <div class="card-body">
                <h4>Nueva Frase</h4>

<div class="alert alert-success alert-dismissible fade show" style="display: none;" id="exito" role="alert">
  <strong>Éxito!</strong> Frase insertada exitosamente.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="alert alert-info alert-dismissible fade show" style="display: none;" id="info" role="alert">
  <strong>Nota:</strong> Puede seguir con la inserción de otra frase.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

                <form action="<?= base_url('nueva-frase'); ?>" method="POST">
                    <label for="frase">Frase</label>
                    <br>
                    <textarea class="form-control" name="frase" id="frase" cols="30" rows="10"></textarea>
                    <br>
                    <label for="author">Autor</label>
                    <input type="text" class="form-control" name="author" id="author">
                    <br>
                    <button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
                    <?php //<button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button> ?>
                </form>
                [<a href="<?php echo base_url('cerrar-sesion'); ?>">Cerrar sesión</a> | <a href="<?php echo base_url('panel'); ?>">Volver al Panel</a>]
            </div>
        </div>
    </div>
</div>
<script>
    var btnCancel = document.querySelector('#cancelar');
    btnCancel.addEventListener('click', function () {
        window.location.assign('<?= base_url('panel'); ?>');
    });

    var btnEnviar = document.querySelector('#enviar');
    btnEnviar.addEventListener('click', makeRequest);

    function makeRequest(e) {
        e.preventDefault();

        $.ajax({
            data: {
                "frase": $('#frase').val(),
                "author": $('#author').val()
            },
            url: "<?= base_url('nueva-frase'); ?>",
            type: "POST"
        }).done(() => {
            $('#frase').val('');
            $('#author').val('');
            $('#exito').show();
            $('#info').show();
        });
    }
</script>
<?php
else:
  echo "Acceso denegado.";
endif;
?>

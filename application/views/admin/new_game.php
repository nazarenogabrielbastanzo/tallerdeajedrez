<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( isset( $_SESSION['admin'] ) ) :
$this->load->view('header_view');
if ( $_POST ) {
    $this->PM->nueva($_POST['blancas'], $_POST['negras'],$_POST['resultado'], $_POST['fecha'], $_POST['evento'], $_POST['vinculo'] );
}
?>
<div class="container">
    <div class="my-5">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Insertar nueva partida</h4>

<div class="alert alert-success alert-dismissible fade show" style="display: none;" id="exito" role="alert">
  <strong>Éxito!</strong> Partida insertada exitosamente.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="alert alert-info alert-dismissible fade show" style="display: none;" id="info" role="alert">
  <strong>Nota:</strong> Puede seguir con la inserción de otra partida.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <form action="<?= base_url('new-game'); ?>" method="POST">
        <div class="form-group">
            <label for="blancas">Blancas</label>
            <input type="text" class="form-control" id="blancas" name="blancas" placeholder="Blancas...">
        </div>
        <div class="form-group">
            <label for="negras">Negras</label>
            <input type="text" class="form-control" id="negras" name="negras" placeholder="Negras...">
        </div>
        <div class="form-group">
            <label for="resultado">Resultado</label>
            <input type="text" class="form-control" id="resultado" name="resultado" placeholder="Resultado...">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha...">
        </div>
        <div class="form-group">
            <label for="evento">Evento</label>
            <input type="text" class="form-control" id="evento" name="evento" placeholder="Evento...">
        </div>
        <div class="form-group">
            <label for="vinculo">Vínculo</label>
            <input type="text" class="form-control" id="vinculo" name="vinculo" placeholder="Vínculo...">
        </div>
        <button type="submit" class="btn btn-primary" id="enviar">Añadir Partida</button>
        <button type="reset" class="btn btn-secondary" id="cancelar">Cancelar</button>
    </form>
    </div>
</div>
    </div>
    <a href="<?= base_url('cerrar-sesion'); ?>">Cerrar sesión</a>
    </div>
    <script>
        var btnCancel = document.querySelector('#cancelar');
        btnCancel.addEventListener('click', () => {
            window.location.assign('<?= base_url('panel'); ?>')
        })

        var btnEnviar = document.querySelector('#enviar');
        btnEnviar.addEventListener('click', makeRequest);

        function makeRequest(e) {
            e.preventDefault();
            
            $.ajax({
                data: {
                    "blancas": $('#blancas').val(),
                    "negras": $('#negras').val(),
                    "resultado": $('#resultado').val(),"fecha": $('#fecha').val(),
                    "evento": $('#evento').val(),
                    "vinculo": $('#vinculo').val()
                },
                url: "<?= base_url('new-game'); ?>",
                type: "POST"
            }).done(() => {
                $('#blancas').val('');
                $('#negras').val('');
                $('#resultado').val('');
                $('#fecha').val('');
                $('#evento').val('');
                $('#vinculo').val('');
                $('#exito').show();
                $('#info').show();
            });
        }
    </script>
<?php endif; ?>
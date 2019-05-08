<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (isset($_SESSION['admin'])) {
    $this->load->view('header_view');
    if ($_POST) {
        $this->PM->nueva($_POST['partida_id'], $_POST['blancas'], $_POST['negras'], $_POST['resultado'], $_POST['fecha'], $_POST['evento'], $_POST['vinculo']);
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

                    <form action="<?= base_url('new-game'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="partida_id">ID</label>
                            <input type="text" class="form-control" id="partida_id" name="partida_id" placeholder="ID...">
                        </div>
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
                        <div class="form-group">
                            <label for="upload">Tooltip</label>
                            <input type="file" id="upload" name="upload">
                        </div>
                        <button type="submit" class="btn btn-primary" id="enviar">Añadir Partida</button>
                    </form>
                </div>
            </div>
        </div>
        [<a href="<?= base_url('cerrar-sesion'); ?>">Cerrar sesión</a> | <a href="<?php echo base_url('panel'); ?>">Volver al Panel</a>]
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
                    "partida_id": $('#partida_id').val(),
                    "blancas": $('#blancas').val(),
                    "negras": $('#negras').val(),
                    "resultado": $('#resultado').val(),
                    "fecha": $('#fecha').val(),
                    "evento": $('#evento').val(),
                    "vinculo": $('#vinculo').val(),
                    "upload": $('#upload').val()
                },
                url: "<?php echo base_url('new-game'); ?>",
                type: "POST"
            }).done(() => {
                $('#partida_id').val('');
                $('#blancas').val('');
                $('#negras').val('');
                $('#resultado').val('');
                $('#fecha').val('');
                $('#evento').val('');
                $('#vinculo').val('');
                $('#upload').val('');
                $('#exito').show();
                $('#info').show();
            });
        }
    </script>
<?php } else {
    echo "Acceso denegado.";
} ?>
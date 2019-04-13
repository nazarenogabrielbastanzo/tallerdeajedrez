<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( isset( $_SESSION['admin'] ) ) :
    $this->load->view('header_view');
    if ( $this->PM->nueva($_POST['blancas'], $_POST['negras'],$_POST['resultado'], $_POST['fecha'], $_POST['evento'], $_POST['vinculo'] ) ) {
?>
<div class="container">
    <div class="my-5">
        <div class="card">
            <div class="card-body">
                <h4>Partida Insertada</h4>
                <a href="<?= base_url('partidas'); ?>">Ver</a>
            </div>
        </div>
    </div>
</div>
<?php
    } else {
        echo '<p>No se insertó nada.</p>';
    }
?>
<?php endif; ?>
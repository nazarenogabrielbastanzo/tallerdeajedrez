<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
if ( $_POST ) :
    //$this->UM->nuevo($_POST['username'], $_POST['password']);
    if ( $this->UM->verificar($_POST['username'], $_POST['password']) ) {
        $_SESSION['admin'] = $_POST['username'];
?>
<!---->
<div class="container">
    <div class="my-5">
        <p>Credenciales OK.</p>
        <p>Username: <em><?= $_SESSION['admin']; ?></em>&nbsp;<a href="<?= base_url('cerrar-sesion'); ?>">Cerrar sesión</a></p>
        <p><a href="<?= base_url('new-game'); ?>">Nueva partida</a></p>
        <p><a href="<?= base_url('nuevo-album') ?>">Nuevo álbum</a></p>
        <p><a href="<?= base_url('nueva-frase'); ?>">Nueva Frase</a></p>
    </div>
</div>
<?php
    } else {
?>
<!---->
<div class="container-fluid">
    <div class="my-3">
        <p>Credenciales no válidas.</p>
    </div>
</div>
<?php
    }
else:
    ?>
        <?php if ( isset ( $_SESSION['admin'] ) ) : ?>
<div class="container">
    <div class="my-5">
        <p>Credenciales OK.</p>
        <p>Username: <em><?= $_SESSION['admin']; ?></em>&nbsp;<a href="<?= base_url('cerrar-sesion'); ?>">Cerrar sesión</a></p>
        <p><a href="<?= base_url('new-game'); ?>">Nueva partida</a></p>
        <p><a href="<?= base_url('nuevo-album'); ?>">Nuevo álbum</a></p>
        <p><a href="<?= base_url('nueva-frase'); ?>">Nueva Frase</a></p>
    </div>
</div>
<?php endif; ?>
<?php
endif;
?>
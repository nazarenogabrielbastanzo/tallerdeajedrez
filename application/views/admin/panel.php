<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');

if ( $_POST ){
  @ $response_recaptcha = $_POST['g-recaptcha-response'];
  //echo $response_recaptcha;
  if (isset($response_recaptcha) && $response_recaptcha){
      $secret = "<serial_secreto>"; // Reemplazar por datos reales
      $ip = $_SERVER['REMOTE_ADDR'];
      $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
      if ($validation_server){
        // (Si recaptcha está Ok...)
        //$this->UM->nuevo($_POST['username'], $_POST['password']);
        if ( $this->UM->verificar($_POST['username'], $_POST['password']) ) {
          $_SESSION['admin'] = $_POST['username'];
        }
      } else {
          echo "No se superó el recaptcha.";
        }
          } else {
            echo "No se superó el recaptcha.";
          }
        }
        if (isset($_SESSION['admin'])) {
?>

<div class="container">
    <div class="my-5">
        <p>Credenciales OK.</p>
        <p>Username: <em><?= $_SESSION['admin']; ?></em>&nbsp;<a href="<?= base_url('cerrar-sesion'); ?>">Cerrar sesión</a></p>
        <p><a href="<?= base_url('new-game'); ?>">Nueva partida</a></p>
        <p><a href="<?= base_url('nuevo-album') ?>">Nuevo álbum</a></p>
        <p><a href="<?= base_url('nueva-frase'); ?>">Nueva Frase</a></p>
        <p>Visitas: <?php echo $this->VM->getVisitas()[0]['visitas']; ?></p>
    </div>
</div>
<?php
  } else {
?>

    <div class="container-fluid">
        <div class="my-3">
            <p>Credenciales no válidas.</p>
        </div>
    </div>
  <?php
  }

?>

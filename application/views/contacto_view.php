<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$this->load->view('header_view');
$this->load->view('menu_view');

if($_POST) {
    @ $response_recaptcha = $_POST['g-recaptcha-response'];
    //echo $response_recaptcha;
    if (isset($response_recaptcha) && $response_recaptcha) {
        $secret = "reemplazar_por_datos_reales";
        $ip = $_SERVER['REMOTE_ADDR'];
        $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
        if ($validation_server) {
          $mail = new PHPMailer(true);
          $mail->isSMTP();
          $mail->Host = 'smtp.hostinger.com';
          $mail->Port = 587;
          $mail->SMTPAuth = true;
          $mail->Username = 'info@tallerdeajedrez.com.ar';
          $mail->Password = 'mi_password';
          $mail->setFrom('info@tallerdeajedrez.com.ar', 'Taller de Ajedrez');
          $mail->addAddress('info@tallerdeajedrez.com.ar', 'Taller de Ajedrez');
          if ($mail->addReplyTo($_POST['inputEmail'], $_POST['inputNombre'])) {
            $mail->Subject = 'Contacto';
            $mail->isHTML(false);
            $mail->Body = <<<EOT
Email: {$_POST['inputEmail']}
Name: {$_POST['inputNombre']}
Message: {$_POST['textArea']}
EOT;
                if (!$mail->send()) {
?>
<div class="alert alert-danger text-center" role="alert" id="alerta">
<button type="button" class="close" data-dismiss="alert">&times;</button>
    Disculpe, Algo salió mal. Por favor, intente nuevamente más tarde.
</div>
<?php
                } else {
?>
<div class="alert alert-success text-center"
  role="alert"
  id="alerta"
  style="margin-top: 100px;">
<button type="button" class="close" data-dismiss="alert">&times;</button>
    ¡Mensaje enviado! Gracias por comunicarse con nosotros.
</div>
<?php
                }
            } else {
?>
<div class="alert alert-danger text-center" role="alert" id="alerta">
<button type="button" class="close" data-dismiss="alert">&times;</button>
    Dirección de correo inválida, mensaje ignorado.
</div>
<?php
            }
        } else {
?>
<div class="alert alert-danger text-center" role="alert" id="alerta">
<button type="button" class="close" data-dismiss="alert">&times;</button>
    Falló la validación del Captcha
</div>
<?php
        }
    } else {
?>
<div class="alert alert-warning text-center" role="alert" id="alerta">
<button type="button" class="close" data-dismiss="alert">&times;</button>
    Debe comprobar que no es un robot
</div>
<?php
    }
}
?>
<div class="container" style="margin-top: 150px;">
    <h4 style="text-align: center;" class="mb-5"><?php echo $current; ?></h4>
    <form action="<?= base_url('contacto') ?>" method="post">
        <div class="form-group row">
            <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNombre" placeholder="Nombre..." name="inputNombre" required value="<?= $_POST ? $_POST['inputNombre'] : "" ?>" autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email..." name="inputEmail" required value="<?= $_POST ? $_POST['inputEmail'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="textArea" class="col-sm-2 col-form-label">Mensaje</label>
            <div class="col-sm-10">
                <textarea class="form-control"
                  id="textArea"
                  rows="4"
                  placeholder="Mensaje..."
                  name="textArea"
                  required>
                </textarea>
            </div>
        </div>
        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
            <div class="g-recaptcha" data-sitekey="reemplazar_por_datos_reales" style="margin-bottom: 15px;"></div>
                <button type="submit" class="btn btn-outline-primary" id="enviar">Enviar</button>
                <button type="reset" class="btn btn-outline-danger">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<script>
    var cancelBtn = document.querySelector("button[type='reset']");
    cancelBtn.addEventListener('click', () => {
        window.location.assign('<?= base_url(index_page()); ?>')
    });
    $(() => {
        setTimeout(() => {
            $('#alerta').fadeOut(1500);
        }, 5000);
    })
</script>
<?php
$this->load->view('footer_view');
?>

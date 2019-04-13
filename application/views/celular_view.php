<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container mt-3">
<h4>Celular</h4>
    <div style="text-align: center;">
            <p style="text-align: center;">Si querés visualizar este sitio web desde el teléfono celular o desde una tablet, podés escanear el siguiente código QR</p>
            <img src="<?= base_url('assets/img/exported_qrcode_image.png'); ?>" alt="Código QR" class="img-fluid"/>
            <p style="text-align: center; margin-top: 5px;">O bien, ingresar la dirección web de este sitio en la barra de direcciones del navegador (tallerdeajedrez.com.ar)</p>
        </div>
    </div>
</section>
<?php $this->load->view('footer_view'); ?>
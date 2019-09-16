<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container" style="margin-top: 150px; background-color: white;">
<h4 style="text-align: center;" class="mb-5"><?php echo $current; ?></h4>
    <div style="text-align: center;">
            <p style="text-align: center; margin-top: 5px;">Usando un lector de códigos QR en el teléfono celular o en una tablet, puedes apuntar con la cámara del dispositivo la siguiente imagen, para cargar este sitio en el navegador de su dispositivo.</p>
            <img src="<?= base_url('assets/img/exported_qrcode_image.png'); ?>" alt="Código QR" class="img-fluid"/>
        </div>
    </div>
</section>
<?php $this->load->view('footer_view'); ?>

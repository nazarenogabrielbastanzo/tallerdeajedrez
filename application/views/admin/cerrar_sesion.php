<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_destroy();
$this->load->view('header_view');
?>
<div class="container">
    <div class="my-5">
        <div class="card">
            <div class="card-body">
                <p>Sesión cerrada.</p>
                <p><a href="<?= base_url('admin'); ?>">Volver a entrar</a></p>
                <p><a href="<?= base_url(index_page()); ?>">Volver al sitio</a></p>
            </div>
        </div>
    </div>
</div>
<script>
  $('.card-body > p:nth-child(2) > a').text('Volver al Panel');
</script>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (isset($_SESSION['admin'])):
    $this->load->view('header_view');
    ?>
<a href="<?= base_url('cerrar-sesion') ?>">Cerrar Sesión</a>
<br>
<a href="<?= base_url('panel'); ?>">Volver</a>
<div class="container">
    <div class="row">
        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
        <form enctype="multipart/form-data" action="" method="post">
            <div class="form-group">
                <label>Choose Files</label>
                <input type="file" class="form-control" name="userFiles[]" multiple/>
            </div>
            <div class="form-group">
                <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="card-columns">
            <?php if(!empty($files)): foreach($files as $file): ?>
            <div class="card">
                <a href="<?= base_url('uploads/files/'.$file['file_name']); ?>">
                    <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" width="200">
                    <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
                </a>
            </div>
            <?php endforeach; else: ?>
            <p>Image(s) not found.....</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
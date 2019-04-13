<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<?php foreach($album as $a): ?>
<?php
switch ( $a['album_id'] ) {
    case '1': ?>
<script>
    jQuery(document).ready(function($){
	    var $cadaImg = $('#slide ul');
	    var cantidadImgs = 19;
	    for (var i = 1; i <= cantidadImgs; i++) {
		    var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/torneo_almacen_cultural_zarate_2010('+ i +').jpg"/></li>');
		    $cadaImg.append(imgs);
	    }
    });
</script>
<?php
        break;
    case '2': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 124;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/torneo_grand_prix_zarate_2010('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
    <?php
        break;
    case '3': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 82;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/Torneo_Equipos_Escobar_21_nov_2010('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '4': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 175;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/LXI_Torneo_Abierto_Verano_2011_Villa_Ballester('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '5': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 89;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/LXI_Torneo_de_Verano_3eray4ta('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '6': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 185;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/LXI_Torneo_de_Verano_2011_5ta_ronda('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '7': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 120;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/LXI_Torneo_Abierto_de_Verano_2011_6ta_ronda('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '8': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 147;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/LXI_Torneo_Abierto_Verano_2011_7ma_ronda('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '9': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 118;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/LXI_Torneo_Abierto_Verano_2011_8va_ronda('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '10': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 84;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/LXI_Torneo_Abierto_Verano_2011_9na_ronda('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '11': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 66;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/1er_ronda_adelman_escobar_2011('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '12': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 158;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/torneo_adelman_escobar_2011('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '13': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 161;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/IX_Torneo_Abierto_Escobar_Jorge_Adelman_2011_5-6-7_rondas('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
    case '14': ?>
<script>
    jQuery(document).ready(function($){
        var $cadaImg = $('#slide ul');
        var cantidadImgs = 8;
        for (var i = 1; i <= cantidadImgs; i++) {
            var imgs = $('<li><img src="<?= base_url('assets/img'); ?>/VillaMartelliConJudithPolgar('+ i +').jpg"/></li>');
            $cadaImg.append(imgs);
        }
    });
</script>
<?php
        break;
}
?>
<div class="container-fluid mt-3">
	<h4><?= "{$a['album']} ({$a['lugar']})" ?></h4>
	<br>
	<div>

	<?php // Inicia slide ?>

		<div id="slide">
			<ul>
				<?php // Acá se agrega, mediante el javascript (ver cabecera.php)... ?>
			</ul>
			<div id="left">
				<span class="fa fa-chevron-left"></span>
			</div>
			<div id="right">
				<span class="fa fa-chevron-right"></span>
			</div>
		</div>

	<?php // Finaliza slide	?>

	</div>
<?php endforeach; ?>
<?php
$this->load->view('footer_view');
?>
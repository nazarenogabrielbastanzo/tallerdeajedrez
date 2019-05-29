<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>

<div class="cbreplay" data-url="<?php echo base_url('assets/partidas/'); ?><?php echo $id; ?>.pgn">
</div>

<?php $this->load->view('footer_view'); ?>
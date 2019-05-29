<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('header_view');
$this->load->view('menu_view');
?>
<div class="container">
  <h4>Grand Prix Moscow 2019</h4>
  <div style="width:900px; height: 600px; margin: auto;">
    <iframe src="https://live.chessbase.com/pgn/grand-prix-moscow-2019/0" width="900" height="600"></iframe></div>
  </div>

<?php $this->load->view('footer_view'); ?>
<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('header_view');
$this->load->view('menu_view');
?>

<div class="container">
  <div class="my-5">
    <div class="card shadow">
      <div class="card-header">
        <h4>FIDE World Cup 2019</h4>
      </div>
      <div class="card-body">
        <div style="width:900px; height: 600px; margin: auto;">
          <iframe src="https://live.chessbase.com/pgn/fide-world-cup-2019/0" width="900" height="600"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('footer_view'); ?>
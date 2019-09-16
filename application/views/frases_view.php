<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container" style="margin-top: 150px; background-color: white;">
  <h4 style="text-align: center;" class="mb-5">Frases</h4>
  <?php foreach ($frase as $f) : ?>
    <a name="<?= $f['frase_id']; ?>"></a>
    <div class="card shadow">
      <div class="card-body" style="background-color: rgb(255,255,224);">
        <blockquote class="blockquote">
          <p class="mb-0">"<?php echo $f['frase']; ?>"</p>
          <footer class="blockquote-footer"><?= $f['autor']; ?></footer>
        </blockquote>
      </div>
    </div>
    <br>
  <?php endforeach; ?>
</section>
<?php $this->load->view('footer_view'); ?>

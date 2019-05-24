<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container mt-3">
<h4>Frases</h4>
<?php
foreach ( $frase as $f ) :
?>
        <a name="<?= $f['frase_id']; ?>"></a>
        <div class="card">
            <div class="card-body">
                <blockquote class="blockquote">
                    <p class="mb-0">"<?php echo $f['frase']; ?>"</p>
                    <footer class="blockquote-footer"><?= $f['autor']; ?></footer>
                </blockquote>
            </div>
        </div>
        <br>
<?php
endforeach;
?>
</section>
<?php $this->load->view('footer_view'); ?>
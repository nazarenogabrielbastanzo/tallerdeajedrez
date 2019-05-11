<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( isset ( $_SESSION['user'] ) ) :
    $this->load->view('header_view');
    if ( $this->FRM->nueva ( $_POST['frase'], $_POST['author'] ) ) :
?>
<div class="container">
    <div class="my-5">
        <div class="card">
            <div class="card-body">
                <h4>Nueva Frase</h4>
                <p>Se insertó con éxito la nueva frase.</p>
            </div>
        </div>
    </div>
</div>
<?php
    else:
        echo '<p>No se insertó nada.</p>';
    endif;
endif;
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( isset( $_SESSION['user'] ) ) :
    $this->load->view('header_view');
    if ($_POST) :
        if ( $this->PM->nueva($_POST['partida_id'], $_POST['blancas'], $_POST['negras'],$_POST['resultado'], $_POST['fecha'], $_POST['evento'], $_POST['vinculo'] ) ) {
            echo '<p>Partida insertada</p>';    
        } else {
            echo '<p>No se insertó nada.</p>';
        }
?>
<?php endif; ?>
<?php endif; ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<div id="container mt-3">
  <h4>Funcionalidades en Taller de Ajedrez</h4>
  <div class="container">
    <p>
      <i class="fas fa-check tilde"></i>Ahora se puede hacer, con el teclado, en cualquier página de este sitio: <br>
      <code>CTRL + ALT + I</code> (Para ir a Inicio) <br>
      <code>CTRL + ALT + P</code> (Para ir a Partidas) <br>
      <code>CTRL + ALT + F</code> (Para ir a Fotos)
    </p>
    <p>
      También se dispone del teclado para: <br>
      <ul>
        <li>
          <i class="fas fa-check tilde"></i>Salir del cartel de Contacto, presionando <code>ESC</code>.
        </li>
        <li>
          <i class="fas fa-check tilde"></i>Avanzar o retroceder de foto en foto, en alguno de los álbums de Fotos, con las teclas de flecha derecha y flecha izquierda, respectivamente.
        </li>
      </ul>
    </p>
    <p>
      Otra funcionalidad, añadida recientemente, es: <br>
      <i class="fas fa-check tilde"></i>Al posicionar el mouse sobre una fila, de la tabla de Partidas, se visualiza una miniatura, de la posición final de la partida correspondiente. <br> <br>
      <img src="<?= base_url('assets/img/screenshots') ?>/captura.png" alt="Pantallazo que muestra la funcionalidad" class="img-fluid border border-primary rounded" />
    </p>
    <p>Artículo publicado el <time datetime="2019-03-17" pubdate>17 de marzo de 2019</time>, por Taller de Ajedrez.</p>
  </div>
</div>
<?php $this->load->view('footer_view'); ?>
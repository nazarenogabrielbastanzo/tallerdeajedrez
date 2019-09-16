<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<div class="container" style="margin-top: 150px; background-color: white;">
  <h4 style="text-align: center;"
    class="mb-5">Funcionalidades en Taller de Ajedrez</h4>
  <p>
    <span class="mobi-mbri mobi-mbri-success mbr-iconfont mbr-iconfont-btn"
      style="color: rgb(0, 255, 0);">
    </span>
    Ahora se puede hacer, con el teclado, en cualquier página de este sitio: <br>
    <code>CTRL + ALT + I</code> (Para ir a Inicio) <br>
    <code>CTRL + ALT + P</code> (Para ir a Partidas) <br>
    <code>CTRL + ALT + F</code> (Para ir a Fotos)
  </p>
  <p>
    También se dispone del teclado para: <br>
        <span class="mobi-mbri mobi-mbri-success mbr-iconfont mbr-iconfont-btn"
          style="color: rgb(0, 255, 0);">
        </span>
        Salir del cartel de Contacto, presionando <code>ESC</code>.<br>
        <span class="mobi-mbri mobi-mbri-success mbr-iconfont mbr-iconfont-btn"
          style="color: rgb(0, 255, 0);">
        </span>
        Avanzar o retroceder de foto en foto, en alguno de los álbums de Fotos, con las teclas de flecha derecha y flecha izquierda, respectivamente.
  </p>
  <p>Artículo publicado el <time datetime="2019-03-17" pubdate>17 de marzo de 2019</time>, por Taller de Ajedrez.</p>
</div>
<?php $this->load->view('footer_view'); ?>

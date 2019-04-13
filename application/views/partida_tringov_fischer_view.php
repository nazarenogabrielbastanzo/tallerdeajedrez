<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container mt-3">
	<article class="blog">
		<h4><?php echo $current; ?></h4>
		<p style="text-align: left;" class="articulo__descripcion">Tringov - Fischer, Capablanca Memorial (1965): Esta partida tiene una curiosa historia, se jugó por teletipo ya que las autoridades de Estados Unidos no le permitieron a Fischer viajar a La Habana a jugar el torneo... </p>
		<div class="articulo__detalle"><p style="text-align: justify;">
			era la época de la "guerra fría" entre las dos principales potencias mundiales, EEUU y la URSS. Este hecho hizo que las partidas duraran muchas horas, ya que las comunicaciones en esa época no eran tan eficientes; entre jugada y jugada había muchos minutos de espera, no sólo por la reflexión de los jugadores, sino además por el tiempo que insumía el proceso de enviarlas y recibir las respuestas. Durante la partida, la jugada 12...Ab4 de Fischer (ver Diagrama) </p>
			<img src="<?= base_url('assets/img/Tringov_Fischer_Diagrama1.jpg'); ?>" alt="Diagrama 1" class="img-fluid rounded">
			<p style="text-align: justify;">causó sorpresa ya que se consideraba muy inferior. Posteriormente, al recibir por el teletipo la jugada 18... Cc6, Tringov directamente pidió confirmación de la misma pues no podía creer que el genial Bobby cayera en una linea que lo conducía a recibir mate en un par de jugadas luego de 19.Df7 y 20.Dg8++ (ver Diagrama).</p>
			<img src="<?= base_url('assets/img/Tringov_Fischer_Diagrama2.jpg'); ?>" alt="Diagrama 2" class="img-fluid rounded">
			<p style="text-align: justify;">La jugada 20...Cf6!! fue un baldazo de agua helada... (ver Diagrama) </p>
			<img src="<?= base_url('assets/img/Tringov_Fischer_Diagrama3.jpg'); ?>" alt="Diagrama 3" class="img-fluid rounded">
			<p style="text-align: justify;">Fischer así refutó la teoría del momento y obligó a abandonar a su rival en un par de jugadas.</p>
			<p>
			<a href="<?= base_url('partida-47') ?>" title="Partida">Clic aquí para ver la partida completa</a>
			</p>
			<p>Artículo publicado el <time datetime="2017-02-26" pubdate>26 de Febrero de 2017</time>, por Taller de Ajedrez.</p>
		</div>
	</article>
</section>
<?php
$this->load->view('footer_view');
?>
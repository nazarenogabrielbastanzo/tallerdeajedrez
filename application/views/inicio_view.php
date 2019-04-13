<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
$this->load->view('carousel_view');
?>
<section class="container-fluid mt-3">
	<div class="card-columns">
		<div class="card">
			<div class="contenedor-imagen">
				<a href="<?= base_url('partidas-amistosas'); ?>" title="Ver mas...">
					<img src="<?= base_url('assets/img/jorgeraulbastanzo.jpg'); ?>" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title">Partidas Amistosas</h4>
				<p class="card-text">Muchas son las ocasiones en las que se pueden jugar partidas amistosas de ajedrez: entre ronda y ronda de un torneo, antes o después de un torneo, en casa, en la plaza, en el tren, y un largo etcétera...</p>
				<div class="text-center">
					<a href="<?= base_url('partidas-amistosas'); ?>" class="btn btn-outline-info">Seguir leyendo</a>        	
				</div>
			</div>
		</div>
		<div class="card">
		<div class="contenedor-imagen">
			<a href="<?= base_url('partida-tringov-fischer') ?>" title="Ver mas...">
				<img class="card-img-top" src="<?= base_url('assets/img/Tringov_Fischer_Diagrama1.jpg'); ?>" alt="Card image cap">
			</a>
		</div>
			<div class="card-body">
				<h4 class="card-title">Partida Tringov - Fischer</h4>
				<p class="card-text">Tringov - Fischer, Capablanca Memorial (1965): Esta partida tiene una curiosa historia, se jugó por teletipo ya que las autoridades de Estados Unidos no le permitieron a Fischer viajar a La Habana a jugar el torneo...</p>
				<div class="text-center">
					<a href="<?= base_url('partida-tringov-fischer') ?>" class="btn btn-outline-info">Seguir leyendo</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">
					Taller de Ajedrez en Lichess
				</h4>
				<script>lichess_widgets.profile_big("light", "tallerdeajedrez", "Mi Lichess");</script>
			</div>
		</div>
		<?php // Funcionalidades ?>
		<div class="card">
			<div class="contenedor-imagen">
				<a href="<?= base_url('funcionalidades'); ?>" title="Ver mas...">
					<img src="<?= base_url('assets/img/screenshots'); ?>/captura.png" alt="Card image cap">
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title">Funcionalidades</h4>
				<p class="card-text">Ahora se puede hacer, con el teclado, en cualquier página de este sitio: ...</p>
				<div class="text-center">
					<a href="<?= base_url('funcionalidades'); ?>" class="btn btn-outline-info">Seguir leyendo</a>        	
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$this->load->view('footer_view')
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
$this->load->view('carousel_view');
?>

<section class="features15 cid-rBU07jC8rl"
	data-bg-video="https://www.youtube.com/watch?v=YQq9yiqhPbA"
	id="features15-3">
	<div class="mbr-overlay"
		style="opacity: 0.5;
		background-color: rgb(255, 255, 255);">
  </div>
	<div class="container">
		<div class="media-container-row container pt-5 mt-2">
			<div class="col-12 col-md-6 mb-4 col-lg-3">
				<div class="card flip-card p-5 align-center">
					<div class="card-front card_cont">
						<img src="<?= base_url('assets/img/jorgeraulbastanzo.jpg'); ?>"
							alt="Mobirise"
							style="width: 100%;">
					</div>
					<div class="card_back card_cont">
						<h4 class="card-title display-5 py-2 mbr-fonts-style">
							Partidas Amistosas
						</h4>
						<p class="mbr-text mbr-fonts-style display-7">
							Muchas son las ocasiones en las que se pueden jugar partidas amistosas de ajedrez . . .
						</p>
						<a href="<?= base_url('partidas-amistosas'); ?>"
							class="btn btn-outline-primary">
							Más...
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-4 col-lg-3">
				<div class="card flip-card p-5 align-center">
					<div class="card-front card_cont">
						<img src="<?= base_url('assets/img/Tringov_Fischer_Diagrama1.jpg'); ?>"
							alt="Mobirise"
							style="width: 100%;">
					</div>
					<div class="card_back card_cont">
						<h4 class="card-title py-2 mbr-fonts-style display-5">
							Partida Tringov vs. Fischer
						</h4>
						<p class="mbr-text mbr-fonts-style display-7">
							Tringov vs. Fischer, Capablanca Memorial (1965): Esta partida . . .
						</p>
						<a href="<?= base_url('partida-tringov-fischer') ?>"
							class="btn btn-outline-primary">
							Más...
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-4 col-lg-3">
				<div class="card flip-card p-5 align-center">
					<div class="card-front card_cont">
						<img src="<?= base_url('assets/img/Ctrl_Z.jpg'); ?>"
							alt="Mobirise"
							style="width: 100%;">
					</div>
					<div class="card_back card_cont">
						<h4 class="card-title py-2 mbr-fonts-style display-5">
							Funciones
						</h4>
						<p class="mbr-text mbr-fonts-style display-7">
							Ahora se puede hacer, con el teclado, en cualquier página de este sitio . . .
						</p>
						<a href="<?= base_url('funcionalidades'); ?>"
							class="btn btn-outline-primary">
							Más...
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-4 col-lg-3">
				<div class="card flip-card p-5 align-center">
					<div class="card-front card_cont">
						<img src="<?= base_url('assets/img/noticias.jpg'); ?>"
							alt="Mobirise"
							style="width: 100%;">
					</div>
					<div class="card_back card_cont">
						<h4 class="card-title py-2 mbr-fonts-style display-5">
							Noticias
						</h4>
						<p class="mbr-text mbr-fonts-style display-7">
							Últimas noticias de Ajedrez, de Chess24 . . .
						</p>
						<a href="<?= base_url('noticias'); ?>"
							class="btn btn-outline-primary">
							Más...
						</a>
					</div>
				</div>
			</div>
    </div>
	</div>
	<div style="margin-top: 50px;">
	</div>
	<div class="mbr-arrow hidden-sm-down" aria-hidden="true">
    <a href="#next">
      <i class="mbri-down mbr-iconfont"></i>
    </a>
  </div>
</section>

<section class="cid-rCgcS7D7b9" id="social-buttons2-3">
	<div class="container">
		<div class="media-container-row">
			<div class="col-md-8 align-center">
				<h2 class="pb-3 mbr-fonts-style display-2">Taller de Ajedrez en redes sociales</h2>
				<div class="social-list pl-0 mb-0">
					<a href="https://www.facebook.com/TallerDeAjedrez" target="_blank">
						<span class="px-2 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"
							style="color: #1a1ac9;"></span>
					</a>
					<a href="https://twitter.com/TallerDeAjedre2" target="_blank">
						<span class="px-2 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"
							style="color: #20ffff;">
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$this->load->view('footer_view')
?>

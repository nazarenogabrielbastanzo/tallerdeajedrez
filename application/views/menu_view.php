<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<menu class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="menu">
			<a href="<?= base_url(); ?>" class="navbar-brand" id="logotipo"><img src="<?= base_url('assets/img/Logo2.png'); ?>" alt="Logotipo de Taller de Ajedrez" class="rounded">&nbsp;Taller de Ajedrez</a>
		</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-center">
				<li class="menu nav-item">
					<a class="nav-link" href="<?= base_url(); ?>">Inicio</a>
				</li>
				<li class="menu nav-item">
					<a class="nav-link" href="<?= base_url('partidas'); ?>">Partidas</a>
				</li>
				<li class="menu nav-item">
					<a class="nav-link" href="<?= base_url('fotos'); ?>">Fotos</a>
				</li>
				<li class="menu nav-item">
						<a class="nav-link" href="<?= base_url('frases'); ?>">Frases</a>
					</li>
                <li class="menu nav-item">
					<a class="nav-link" href="<?= base_url('celular'); ?>">Celular</a>
				</li>
				<li class="menu nav-item">
					<a class="nav-link" href="javascript:void()" data-toggle="modal" data-target="#exampleModal">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
</menu>
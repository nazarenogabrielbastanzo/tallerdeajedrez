<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
	<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<div class="hamburger">
		    <span></span>
		    <span></span>
		    <span></span>
		    <span></span>
			</div>
    </button>
    <div class="menu-logo">
    	<div class="navbar-brand">
        <span class="navbar-logo">
          <a href="<?php echo base_url(index_page()); ?>">
            <img src="<?php echo base_url('assets/images/logo2-50x65.png'); ?>"
							alt="Taller de Ajedrez"
							title="Taller de Ajedrez"
							style="height: 5.5rem;"
							class="rounded">
          </a>
        </span>
        <span class="navbar-caption-wrap">
					<a class="navbar-caption text-primary display-5"
						href="<?php echo base_url(index_page()); ?>">
						Taller de Ajedrez
					</a>
				</span>
      </div>
		</div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
				<li class="nav-item">
          <a class="nav-link link text-primary display-4" href="<?php echo base_url(index_page()); ?>">
  					Inicio<br>
					</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link text-primary display-4" href="<?php echo base_url(index_page().'/partidas/pagina-1'); ?>">
            Partidas<br>
					</a>
        </li>
				<li class="nav-item">
					<a class="nav-link link text-primary display-4" href="<?php echo base_url(index_page().'/torneos'); ?>">
          	Torneos<br>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link text-primary display-4" href="<?php echo base_url(index_page().'/fotos'); ?>">
						Fotos<br>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link text-primary display-4" href="<?php echo base_url(index_page().'/frases'); ?>">
            Frases<br>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link text-primary display-4" href="<?php echo base_url(index_page().'/dispositivos'); ?>">
						Dispositivos<br>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link text-primary display-4" href="<?= base_url(index_page().'/contacto'); ?>">
						Contacto<br>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link text-primary display-4" href="<?= base_url(index_page().'/buscar'); ?>">
						Buscar<br>
					</a>
				</li>
			</ul>
		</div>
  </nav>
</section>

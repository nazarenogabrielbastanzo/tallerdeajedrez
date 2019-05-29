<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<header>
	<menu class="sticky-top">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<div class="menu">
				<a href="<?php echo base_url(); ?>" class="navbar-brand" id="logotipo"><img src="<?php echo base_url('assets/img/Logo2.png'); ?>" alt="Logotipo de Taller de Ajedrez" class="rounded">&nbsp;Taller de Ajedrez</a>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto text-center">
					<li class="menu nav-item order-1 <?php echo (isset($current) && $current == 'Inicio') ? 'active' : ''; ?>">
						<a class="nav-link" href="<?php echo base_url(); ?>">Inicio</a>
					</li>
					<li class="menu nav-item order-2 <?php echo (isset($current) && $current == 'Partidas') ? 'active' : ''; ?>">
						<a class="nav-link" href="<?php echo base_url('partidas/pagina-1'); ?>" rel="tag">Partidas</a>
					</li>
					<!-- torneos: -->
					<li class="menu nav-item order-3 <?php echo (isset($current) && $current == 'Torneos') ? 'active' : ''; ?>">
						<a class="nav-link" href="<?php echo base_url('torneos'); ?>" rel="tag">Torneos</a>
					</li>
					<!-- :torneos -->
					<li class="menu nav-item order-4 <?php echo (isset($current) && $current == 'Fotos') ? 'active' : ''; ?>">
						<a class="nav-link" href="<?php echo base_url('fotos/pagina-1'); ?>" rel="tag">Fotos</a>
					</li>
					<li class="menu nav-item order-5 <?php echo (isset($current) && $current == 'Frases') ? 'active' : ''; ?>">
						<a class="nav-link" href="<?php echo base_url('frases'); ?>" rel="tag">Frases</a>
					</li>
					<li class="menu nav-item order-6 <?php echo (isset($current) && $current == 'Celular') ? 'active' : ''; ?>">
						<a class="nav-link" href="<?php echo base_url('dispositivos'); ?>">Dispositivos</a>
					</li>
					<li class="menu nav-item order-7 <?php echo (isset($current) && $current == 'Contacto') ? 'active' : ''; ?>">
						<a class="nav-link" href="javascript:void()" data-toggle="modal" data-target="#exampleModal">Contacto</a>
					</li>
					<li class="menu nav-item order-8 <?php echo (isset($current) && $current == 'Compartir') ? 'active' : ''; ?>" id="compartirWhatsApp">
						<a class="nav-link" href="javascript:void()" data-toggle="modal" data-target="#exampleModal1">Compartir</a>
					</li>
				</ul>

				<?php
				?>
				<form class="form-inline my-2 my-lg-0" action="<?php echo base_url('resultados-busqueda'); ?>" method="GET">
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" name="PalabraClave" autocomplete="off" required>
					<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
				</form>
				<?php
				?>

			</div>

		</nav>
	</menu>
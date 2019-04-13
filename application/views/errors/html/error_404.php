<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>404 Page Not Found</title>

	<?php // Required meta tag for Bootstrap ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php // Bootstrap CSS ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<?php // Fontawesome ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<?php // Estilos propios ?>
	<style>
	p { text-align: justify; }
	h4 { text-align: center; color: #45A1FF; }
	h1, h2, h3, h4 { color: #45A1FF; }
	#logotipo { color: #45A1FF; }
	i.tilde { color: lightgreen; font-size: 150%; margin: 10px; }
	/*a { color: #9A9D90; }
	a:hover { outline: 1px solid #45A1FF; text-decoration: none; color: white;}
	body, .modal-content { background-color: #343A40; color: white; }*/
	/*.sticky-top { opacity: .8; }*/
	.fijo { position: fixed; }
	.pie {
			position: absolute;
			bottom: 0;
			width: 100%;
			/* Set the fixed height of the footer here */
			height: 60px;
			line-height: 60px; /* Vertically center the text there */
			background-color: #f5f5f5;
	}

	.contenedor-imagen img {
			-webkit-transition:all .9s ease; /* Safari y Chrome */
			-moz-transition:all .9s ease; /* Firefox */
			-o-transition:all .9s ease; /* IE 9 */
			-ms-transition:all .9s ease; /* Opera */
			width: 100%;

	}
	.contenedor-imagen:hover img {
			-webkit-transform:scale(1.12);
			-moz-transform:scale(1.12);
			-ms-transform:scale(1.12);
			-o-transform:scale(1.12);
			transform:scale(1.12);
	}

	.contenedor-imagen {
			/* Igual que en .card-img-top (Bootstrap 4.1)*/
			border-top-left-radius: calc(0.25rem - 1px);
			border-top-right-radius: calc(0.25rem - 1px);
			overflow: hidden;
	}
	/* Modifican el estilo de Bootstrap: */
	.tooltip{opacity:1!important;}


	.sticky-top {
			/*transition: top 0.5s ease-in-out;*/ /* <-- También sirve */
			transition-property: all;
			transition-duration: .5s;
	}

	.nav-up {
			top: -100px;
	}

	.partidas {
			display: none;
	}
	.card.border-info, .flecha {
			cursor: pointer;
	}
	footer a {
		text-decoration: none!important;
	}

	a.nav-link {
		border: 1px solid white;
		border-radius: 5px;
		transition-property: all;
		transition-duration: .5s;
	}

	a.nav-link:hover {
		border: 1px solid lightblue;
	}

	</style>

	<?php // Bootstrap JS (1ero. jQuery, 2do. Popper y 3ero. Bootstrap) ?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
	<menu class="container-fluid my-0">
	  <nav class="navbar navbar-expand-lg navbar-light bg-white">
			<div class="menu">
				<a href="https://tallerdeajedrez.com.ar/" class="navbar-brand" id="logotipo"><img src="../../../assets/img/Logo2.png" alt="Logotipo de Taller de Ajedrez" class="rounded">&nbsp;Taller de Ajedrez</a>
			</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto text-center">
					<li class="menu nav-item order-1">
						<a class="nav-link" href="https://tallerdeajedrez.com.ar/">Inicio</a>
					</li>
					<li class="menu nav-item order-2">
						<a class="nav-link" href="https://tallerdeajedrez.com.ar/partidas/pagina-1">Partidas</a>
					</li>
					<li class="menu nav-item order-3">
						<a class="nav-link" href="https://tallerdeajedrez.com.ar/fotos">Fotos</a>
					</li>
					<li class="menu nav-item order-4">
						<a class="nav-link" href="https://tallerdeajedrez.com.ar/frases">Frases</a>
					</li>
	        <li class="menu nav-item order-5">
						<a class="nav-link" href="https://tallerdeajedrez.com.ar/celular">Celular</a>
					</li>
					<li class="menu nav-item order-6">
						<a class="nav-link" href="javascript:void()" data-toggle="modal" data-target="#exampleModal">Contacto</a>
					</li>
				</ul>
			</div>

		</nav>
	</menu>
<div class="container">
	<div class="justify-content-center">
		<h1>404 Página no encontrada</h1>
		<p>No se encontró la página que solicitó.</p>
		<p>Pruebe con algunos de los links del menú.</p>
	</div>
</div>

	<?php // Modal ?>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="exampleModalLabel">Contacto</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <p><i class="fas fa-check tilde"></i>Pueden comunicarse con nosotros escribiendo un correo electrónico a: <a href="mailto:info@tallerdeajedrez.com.ar">info@tallerdeajedrez.com.ar</a></p>
					<p><i class="fas fa-check tilde"></i>O bien, completando el <a href="https://tallerdeajedrez.com.ar/contacto">formulario de contacto</a></p>
	                <p><i class="fas fa-check tilde"></i><a href="https://www.facebook.com/TallerDeAjedrez">Taller de Ajedrez en Facebook</a></p>
	                <p><i class="fas fa-check tilde"></i><a href="https://twitter.com/TallerdeAjedre2">Taller de Ajedrez en Twitter</a></p>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	            </div>
	        </div>
	    </div>
	</div>

	<footer>
	    <div class="py-5">
	        <h4 class="text-center"><em><a href="https://tallerdeajedrez.com.ar/">Taller de Ajedrez</a></em></h4>
	    </div>
	</footer>

	<script>
	    function KeyPress(e) {
	        var evtobj = window.event? event : e
	        if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 73) // CTRL + ALT + I
	        {
	            window.location.assign('<?= base_url(index_page()); ?>');
	        }
	        if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 80) // CTRL + ALT + P
	        {
	            window.location.assign('<?= base_url('partidas'); ?>');
	        }
	        if (evtobj.ctrlKey && evtobj.altKey && evtobj.keyCode === 70) // CTRL + ALT + F
	        {
	            window.location.assign('<?= base_url('fotos'); ?>');
	        }
	    }

	    document.onkeydown = KeyPress;

			// Hide Header on on scroll down
			var didScroll;
			var lastScrollTop = 0;
			var delta = 5;
			var navbarHeight = $('menu').outerHeight();

			$(window).scroll(function(event){
			    didScroll = true;
			});

			setInterval(function() {
			    if (didScroll) {
			        hasScrolled();
			        didScroll = false;
			    }
			}, 250);

			function hasScrolled() {
			    var st = $(this).scrollTop();

			    // Make sure they scroll more than delta
			    if(Math.abs(lastScrollTop - st) <= delta)
			        return;

			    // If they scrolled down and are past the navbar, add class .nav-up.
			    // This is necessary so you never see what is "behind" the navbar.
			    if (st > lastScrollTop && st > navbarHeight){
			        // Scroll Down
			        scrollDown();
			    } else {
			        // Scroll Up
			        scrollUp();
			    }

			    function scrollDown() {
			      $('menu').removeClass('sticky-top').addClass('nav-up');
			    }

			    function scrollUp() {
			      if(st + $(window).height() < $(document).height()) {
			          $('menu').removeClass('nav-up').addClass('sticky-top');
			      }
			    }

			    lastScrollTop = st;
			}


	</script>
	</body>
	</html>

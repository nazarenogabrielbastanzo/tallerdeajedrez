<!doctype html>
<html lang="es-ar">

<head>

<?php // Código de seguimiento de Google Analytics: ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108819279-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108819279-1');
</script>

<?php // :código de seguimiento de Google Analytics ?>

	<meta charset="utf-8">
	<title>Taller de Ajedrez</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/estilo1.css" />
	<link rel="stylesheet" href="css/font-awesome.css">

<?php // Inclusión selectiva (if) de la hoja de estilos para los álbums de fotos: ?>

<?php
if (isset($_GET['page'])):
	if ($_GET['page'] == 'fotos_torneo1' || $_GET['page'] == 'fotos_torneo2' || $_GET['page'] == 'fotos_torneo3' || $_GET['page'] == 'fotos_torneo4_1-2' || $_GET['page'] == 'fotos_torneo4_3-4' || $_GET['page'] == 'fotos_torneo4_5' || $_GET['page'] == 'fotos_torneo4_6' || $_GET['page'] == 'fotos_torneo4_7' || $_GET['page'] == 'fotos_torneo4_8' || $_GET['page'] == 'fotos_torneo4_9' || $_GET['page'] == 'fotos_torneo5_1' || $_GET['page'] == 'fotos_torneo5_2-3-4' || $_GET['page'] == 'fotos_torneo5_5-6-7' || $_GET['page'] == 'fotos_torneo6'): ?>

	<link rel="stylesheet" href="css/style.css">

<?php
endif;
endif;
?>

<?php // :Inclusión selectiva (if) de la hoja de estilos para los álbums de fotos ?>
<link href="https://fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
<?php // jQuery (no colocarle async): ?>

	<script src="js/jquery.js"></script>

<?php // :jQuery (no colocarle async) ?>

<?php // Inclusión selectiva (switch) de los scripts específicos de cada álbum de fotos ?>

<?php
if (isset($_GET['page'])):
	switch ($_GET['page']):
		case 'fotos_torneo1':
			echo '<script  src="js/galeria1.js"></script>';
			break;
		case 'fotos_torneo2':
			echo '<script  src="js/galeria2.js"></script>';
			break;
		case 'fotos_torneo3':
			echo '<script  src="js/galeria3.js"></script>';
			break;
		case 'fotos_torneo4_1-2':
			echo '<script  src="js/galeria4.js"></script>';
			break;
		case 'fotos_torneo4_3-4':
			echo '<script  src="js/galeria4_3-4.js"></script>';
			break;
		case 'fotos_torneo4_5':
			echo '<script  src="js/galeria4_5.js"></script>';
			break;
		case 'fotos_torneo4_6':
			echo '<script  src="js/galeria4_6.js"></script>';
			break;
		case 'fotos_torneo4_7':
			echo '<script  src="js/galeria4_7.js"></script>';
			break;
		case 'fotos_torneo4_8':
			echo '<script  src="js/galeria4_8.js"></script>';
			break;
		case 'fotos_torneo4_9':
			echo '<script  src="js/galeria4_9.js"></script>';
			break;
		case 'fotos_torneo5_1':
			echo '<script  src="js/galeria5_1.js"></script>';
			break;
		case 'fotos_torneo5_2-3-4':
			echo '<script  src="js/galeria5_2-3-4.js"></script>';
			break;
		case 'fotos_torneo5_5-6-7':
			echo '<script  src="js/galeria5_5-6-7.js"></script>';
			break;
		case 'fotos_torneo6':
			echo '<script  src="js/galeria6.js"></script>';
			break;
	endswitch;
?>

<?php // :Inclusión selectiva (switch) de los scripts específicos de cada álbum de fotos ?>

<?php // Inclusión selectiva (if) del script responsable de hacer el Slide de fotos: ?>

<?php
	if ($_GET['page'] == 'fotos_torneo1' || $_GET['page'] == 'fotos_torneo2' || $_GET['page'] == 'fotos_torneo3' || $_GET['page'] == 'fotos_torneo4_1-2' || $_GET['page'] == 'fotos_torneo4_3-4' || $_GET['page'] == 'fotos_torneo4_5' || $_GET['page'] == 'fotos_torneo4_6' || $_GET['page'] == 'fotos_torneo4_7' || $_GET['page'] == 'fotos_torneo4_8' || $_GET['page'] == 'fotos_torneo4_9' || $_GET['page'] == 'fotos_torneo5_1' || $_GET['page'] == 'fotos_torneo5_2-3-4' || $_GET['page'] == 'fotos_torneo5_5-6-7' || $_GET['page'] == 'fotos_torneo6'): ?>

			<script  src="js/script.js"></script>

<?php
	endif;
endif;
?>

<?php // :Inclusión selectiva (if) del script responsable de hacer el Slide de fotos ?>

<?php // Inclusión de la librería W3.js (JavaScript), para hacer, entre otras cosas, las búsquedas instantáneas: ?>

	<script  src="js/w3.js"></script>

<?php // :Inclusión de la librería W3.js (JavaScript), para hacer, entre otras cosas, las búsquedas instantáneas: ?>

</head>

<body>

<?php // Capa del contenido (cierra en el archivo pie.php): ?>

	<div class="w3-main">
		
        <header class="w3-container w3-padding">

<?php // Logotipo: ?>

		<div class="w3-left" style="width: 357px;">
			<a href="?page=inicio" style="text-decoration: none; font-size: 30px; color: #3F51B5;"><img src="img/Logo2.png" alt="Taller de Ajedrez" class="w3-image w3-round-large" id="logo"><span style="display: inline-block; transform: translateY(-15px);">&nbsp;Taller de Ajedrez&nbsp;</span></a>
		</div>

<?php // :Logotipo ?>

<?php // Links: ?>
        <nav class="w3-right">
<a href="?page=inicio">Inicio</a>
<a href="?page=partidas">Partidas</a>
<a href="?page=frases">Frases</a>
<a href="?page=fotos">Fotos</a>
<a href="?page=blog">Blog</a>
<a href="?page=movil">Móvil</a>

<?php // CONTACTO ?>

<a href="javascript: mostrarCartel();">Contacto</a>

<?php // :Contacto (Ítem del menú) ?>

<?php // Modal del cartel de contacto: ?>

		<div id="id01" class="w3-modal">
		    <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-round-large">
				<div class="w3-container">
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright w3-xlarge w3-pale-red">&times;</span>
					<div class="w3-container w3-center">
						<h1><i class="fa fa-envelope w3-xxlarge" aria-hidden="true" style="color: #3F51B5;"></i>&nbsp;Contacto</h1>
						<div class="w3-panel">
							Pueden comunicarse con nosotros escribiendo un email a: <a href="mailto:tallerdeajedrez.contacto@gmail.com" title="Correo electrónico">tallerdeajedrez.contacto&commat;gmail.com</a>
						</div>
						<div class="w3-panel">
							<i class="fa fa-thumbs-up w3-xxlarge" aria-hidden="true" style="color: #3F51B5;"></i>&nbsp;<a target="_blank" href="https://www.facebook.com/TallerDeAjedrez">Taller de Ajedrez en Facebook</a>
						</div>
						<div class="w3-panel">
							<i class="fa fa-twitter w3-xxlarge" aria-hidden="true" style="color: cyan;"></i>&nbsp;<a target="_blank" href="https://twitter.com/TallerdeAjedre2">Taller de Ajedrez en Twitter</a>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php // :Modal del cartel de contacto ?>

<?php // CONTACTO ?>


</nav>
<?php // :Links ?>
</header>
<?php // :archivo cabecera.php ?>
<div id="contenido">

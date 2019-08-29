<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title><?= $titulo ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/estilo1.css'); ?>" />
	<link rel="stylesheet" href="https://rubenwardy.com/lichess_widgets/lichess_widgets.css" />
	<link rel="stylesheet" href="https://rubenwardy.com/lichess_widgets/light.css" />
	<!-- CBR: -->
	<link rel="stylesheet" type="text/css" href="https://pgn.chessbase.com/CBReplay.css" />
	<!-- :CBR -->
	<!-- Carousels -->
<style>
	/* Para personalizar las flechas del carousel de fotos */
	/*.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
  background-image: none;
}

.carousel-control-next-icon:after
{
  content: '>';
  font-size: 55px;
  color: blue;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 55px;
  color: blue;
}
.carousel-item > img {
	max-width: 800px;
}
.carousel-inner img {
  max-width: 750px;
}*/
/**/
</style>
	<!-- Carousels -->
	<script src="<?= base_url('assets/js/lichess_widgets.js') ?>"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108819279-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-108819279-1');
	</script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
<![endif]-->
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<!-- CBR: -->
	<script src="https://pgn.chessbase.com/cbreplay.js" type="text/javascript"></script>
	<!-- :CBR -->
</head>

<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=1792091397779982&autoLogAppEvents=1"></script>
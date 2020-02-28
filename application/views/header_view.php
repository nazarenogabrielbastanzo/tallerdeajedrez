<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo2-50x65.png'); ?>" type="image/x-icon">
	<title><?= $titulo ?></title>

	<link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons2/mobirise2.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/animatecss/animate.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://rubenwardy.com/lichess_widgets/lichess_widgets.css" />
	<link rel="stylesheet" href="https://rubenwardy.com/lichess_widgets/light.css" />
	<!-- CBR: -->
	<link rel="stylesheet" type="text/css" href="https://pgn.chessbase.com/CBReplay.css" />
	<!-- :CBR -->

	<style media="screen">
		/* Para hacer las fotos responsivas */
		div.divresponsivo {
			width: 96%;
			max-width: 960px;
			margin: 0 auto;
		}

		img.imgresponsiva {
			width: 100%;
			height: auto;
		}
		/**/
		/* Efectos de los links del menu */
		a.nav-link.link.text-primary.display-4 {
			border-bottom: 3px solid rgba(0, 0, 0, 0.0);
			transition: border-bottom .5s ease-in-out;
		}
		a.nav-link.link.text-primary.display-4:hover {
			border-bottom: 3px solid rgba(0, 0, 255, 1.0);
		}
		/**/
		.img-articulo {
			width: 50%;
			float: left;
		}
	</style>

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
	<script src="<?php echo base_url('assets/web/assets/jquery/jquery.min.js'); ?>"></script>
</head>

<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=1792091397779982&autoLogAppEvents=1"></script>

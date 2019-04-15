<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title><?= $titulo ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">

	<?php // Required meta tag for Bootstrap ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php // Bootstrap CSS ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<?php // Fontawesome ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<?php // Estilos propios ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/estilo1.css'); ?>" />

	<?php // Para el álbum ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" />

	<?php // Para el widget de lichess ?>
	<link rel="stylesheet" href="https://rubenwardy.com/lichess_widgets/lichess_widgets.css" />
    <?php // For the light theme ?> <link rel="stylesheet" href="https://rubenwardy.com/lichess_widgets/light.css" />
    <?php // For the dark theme <link rel="stylesheet" href="https://rubenwardy.com/lichess_widgets/dark.css" /> ?>
    <script src="<?= base_url('assets/js/lichess_widgets.js') ?>"></script>

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

<?php // reCaptcha ?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<?php // Soporte HTML5 para navegadores antiguos: ?>
<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
<![endif]-->
<?php // Soporte HTML5 para navegadores antiguos: ?>

<?php // Dejar jQuery aquí arriba: ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<body>

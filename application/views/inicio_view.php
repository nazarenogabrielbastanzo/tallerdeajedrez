<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
$this->load->view('carousel_view');
?>
</header>
<section class="container-fluid mt-3">
	<div class="card-columns">
		<?php // Partidas Amistosas ?>
		<article class="card border-primary">
			<div class="contenedor-imagen" onclick="location.href='<?= base_url('partidas-amistosas'); ?>';">
				<img src="<?= base_url('assets/img/jorgeraulbastanzo.jpg'); ?>" alt="Card image cap" title="Ver mas...">
			</div>
			<div class="card-body">
				<h4 class="card-title">Partidas Amistosas</h4>
				<p class="card-text">Muchas son las ocasiones en las que se pueden jugar partidas amistosas de ajedrez: entre ronda y ronda de un torneo, antes o después de un torneo, en casa, en la plaza, en el tren, y un largo etcétera...</p>
				<div class="text-center">
					<div class="btn btn-outline-primary" onclick="location.href='<?= base_url('partidas-amistosas'); ?>';">Seguir leyendo</div>
				</div>
			</div>
		</article>
		<?php // Partida Tringov-Fischer ?>
		<article class="card border-primary">
			<div class="contenedor-imagen" onclick="location.href='<?= base_url('partida-tringov-fischer') ?>';">
				<img class="card-img-top" src="<?= base_url('assets/img/Tringov_Fischer_Diagrama1.jpg'); ?>" alt="Card image cap" title="Ver mas...">
			</div>
			<div class="card-body">
				<h4 class="card-title">Partida Tringov vs. Fischer</h4>
				<p class="card-text">Tringov vs. Fischer, Capablanca Memorial (1965): Esta partida tiene una curiosa historia, se jugó por teletipo ya que las autoridades de Estados Unidos no le permitieron a Fischer viajar a La Habana a jugar el torneo...</p>
				<div class="text-center">
					<div class="btn btn-outline-primary" onclick="location.href='<?= base_url('partida-tringov-fischer') ?>';">Seguir leyendo</div>
				</div>
			</div>
		</article>
		<?php // Taller de Ajedrez en Lichess ?>
		<article class="card border-primary">
			<div class="card-body">
				<h4 class="card-title">
					Taller de Ajedrez en Lichess
				</h4>
				<script>lichess_widgets.profile_big("light", "tallerdeajedrez", "Mi Lichess");</script>
			</div>
		</article>
		<?php // Funcionalidades ?>
		<article class="card border-primary">
			<div class="contenedor-imagen" onclick="location.href='<?= base_url('funcionalidades'); ?>';">
					<img src="<?= base_url('assets/img/screenshots'); ?>/captura.png" alt="Card image cap" title="Ver mas...">
			</div>
			<div class="card-body">
				<h4 class="card-title">Funcionalidades</h4>
				<p class="card-text">Ahora se puede hacer, con el teclado, en cualquier página de este sitio: ...</p>
				<div class="text-center">
					<div class="btn btn-outline-primary" onclick="location.href='<?= base_url('funcionalidades'); ?>';">Seguir leyendo</div>
				</div>
			</div>
		</article>
		<?php // chess24 Noticias ?>
		<article class="card border-primary">
			<div class="card-body">
				<h4 class="card-title">chess24 Noticias</h4>
<?php
function feed($feedURL) {
	$i = 0; 
	$url = $feedURL; 
	$rss = simplexml_load_file($url); 
  foreach($rss->channel->item as $item) { 
    $link = $item->link;  //extrae el link
    $title = $item->title;  //extrae el titulo
    $date = $item->pubDate;  //extrae la fecha
    $date = date("d/m/Y", strtotime($date)); //convierte la fecha cruda en fecha legible
		//$guid = $item->guid;  //extrae el link de la imagen
    $description = strip_tags($item->description);  //extrae la descripcion
    if (strlen($description) > 400) { //limita la descripcion a 400 caracteres
    	$stringCut = substr($description, 0, 200);                   
    	$description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
    }
    if ($i < 3) { // extrae solo 3 items
//    	echo '<div class="cuadros1"><h4><a href="'.$link.'" target="_blank">'.$title.'</a></h4><br><img src="'.$guid.'"><br>'.$description.'<br><div class="time">'.$date.'</div></div>';
    	echo '<div><h6><a href="'.$link.'" target="_blank">'.$title.'</a></h6>'.$description.'<br><div class="time text-right">'.$date.'</div></div><br>';
    }
    $i++;
  }
  echo '<p class="text-center"><a href="https://chess24.com/es/informate/noticias" target="_blank">Más noticias de ajedrez en chess24</a></p>';
	//echo '<div style="clear: both;"></div>';
}
?>	
<?php feed("https://chess24.com/es/informate/noticias.rss"); ?>
			</div>
		</article>
	</div><?php // div de cierre con class="card-columns" ?>
</section>
<?php
$this->load->view('footer_view')
?>

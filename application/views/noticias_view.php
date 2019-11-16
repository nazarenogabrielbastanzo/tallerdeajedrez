<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container" style="margin-top: 150px; background-color: white;">
  <h4 style="text-align: center;"
    class="mb-5"><?php echo $current; ?> Chess24</h4>
<?php
		function feed($feedURL)
		{
			$i = 0;
			$url = $feedURL;
			$rss = simplexml_load_file($url);
			foreach ($rss->channel->item as $item) {
				$link = $item->link;  //extrae el link
				$title = $item->title;  //extrae el titulo
				$date = $item->pubDate;  //extrae la fecha
				$date = date("d/m/Y", strtotime($date)); //convierte la fecha cruda en fecha legible
				//$guid = $item->guid;  //extrae el link de la imagen
				$description = strip_tags($item->description);  //extrae la descripcion
				if (strlen($description) > 400) { //limita la descripcion a 400 caracteres
					$stringCut = substr($description, 0, 200);
					$description = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
				}
				if ($i < 3) { // extrae solo 3 items
					//    	echo '<div class="cuadros1"><h4><a href="'.$link.'" target="_blank">'.$title.'</a></h4><br><img src="'.$guid.'"><br>'.$description.'<br><div class="time">'.$date.'</div></div>';
					echo '<div><h6><a href="' . $link . '" target="_blank">' . $title . '</a></h6>' . $description . '<br><div class="time text-right">' . $date . '</div></div><br>';
				}
				$i++;
			}
			echo '<p class="text-center"><a href="https://chess24.com/es/informate/noticias" target="_blank">Más noticias de ajedrez en chess24</a></p>';
			//echo '<div style="clear: both;"></div>';
		}
?>
<?php feed("https://chess24.com/es/informate/noticias.rss"); ?>
</section>
<?php $this->load->view('footer_view'); ?>

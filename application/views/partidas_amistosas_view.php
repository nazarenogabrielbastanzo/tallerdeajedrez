<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
	<section class="container mt-3">
		<article>
			<h4>Partidas Amistosas</h4>
			<p style="text-align: left;" class="articulo__descripcion">Muchas son las ocasiones en las que se pueden jugar partidas amistosas de ajedrez: entre ronda y ronda de un torneo, antes o después de un torneo, en casa, en la plaza, en el tren, y un largo etcétera... </p>
			<div class="articulo__detalle">
			<p style="text-align: justify;">
			Las partidas amistosas que colocamos en Taller de Ajedrez, fueron jugadas en algunas de estas tantas ocasiones que mencionamos unas líneas más arriba.
	Pero cabe destacar que estas partidas, que llamamos “amistosas”, al no jugarse formalmente sino que se juegan amistosamente (valga la redundancia), pierden un poco de valor teórico, y ganan mucho valor práctico. Me refiero a que no se hacen las mejores jugadas “de libro”, pero sí las mejores jugadas de “ese momento”, el momento en que fueron realizadas. Es así como podemos encontrar partidas “de este tipo” (amistosas), que no dicen mucho a quien busca en ellas una partida ejemplar pero, al visualizarlas en su totalidad, se encuentran detalles muy finos: combinaciones de todo tipo, jugadas posicionales estupendas, remates “de libro”, etcétera.
	Es por eso que en Taller de Ajedrez, no nos ahorramos el trabajo de colocarlas en la sección "Partidas". <br>
	En esta ocasión, quisiera compartir con ustedes una breve entrevista con alguien que aportó las primeras partidas amistosas que se publicaron en el sitio:
	Es un gusto para mi presentarles a mi papá: ¡Jorge Raúl! (ver Foto)</p>
	<img src="<?= base_url('assets/img/jorgeraulbastanzo.jpg'); ?>" alt="Jorge Raúl Bastanzo" class="img-fluid rounded">
	<p>
		<b>- Redactor (R): ¡Buenos días papi! o bien, ¡Buenos días Jorge! ¿Cómo estás?</b>
		<br>
		<em class="italica">- Jorge (J): ¡Hola Nazareno!, ¡Buenas días!, ¡Yo bien! ¿Y vos?</em>
	</p>
	<p>
		<b>- R: Bien, decime: ¿Cuál es la partida amistosa, de las publicadas en Taller de Ajedrez hasta ahora, que más te gustó?</b>
		<br>
		<em class="italica">- J: Me gustó más la que jugué con Carlos. </em>
	</p>
	<p>
		<b>- R: Ok, ¿Podrías contarnos bajo qué condiciones se disputó la partida? </b>
		<br>
		<em class="italica">- J: Bueno, como detalles ambientales puedo decirte que se jugó en un torneo de partidas rápidas a 5 minutos por jugador en un club. Los jugadores de categoría superior tenían que darnos algunos minutos de handicap en el reloj. Cuando estábamos por empezar Carlos sonriendo me dijo: “yo no pido ni doy ventaja”, mientras corregía la posición inicial del reloj. Sería entonces a 5 minutos; le dije que estaba de acuerdo. Era posible que lógicamente perdiera, pero no estaba dispuesto a no luchar por el punto. </em>
	</p>
	<p>
		<b>- R: Ok, y ¿cuáles fueron las cosas que más te gustaron de esta partida?</b>
		<br>
		<em class="italica">- J: Inicialmente intenté jugar una apertura de peón dama, pero cuando juega c5 veo que me quiere sacar de lo que me gusta jugar a mi. Podía avanzar el peón a d5, buscando un esquema benoni, pero me decidí por Cf3 que es más elástica y finalmente se transforma en una siciliana por transposición. También los enroques opuestos, definieron una partida de ataque. </em>
	</p>
	<p>
		<b>- R: ¿Te gustó alguna jugada en particular?</b>
		<br>
		<em class="italica">- J: Me gustó 18. Te5, por la doble amenaza de Af7 y Tg5, ganando.</em>
	</p>
	<p>
		<b>- R: En la jugada 19, ¿no era mejor directamente Tg5?</b>
		<br>
		<em class="italica">- J: Sí es la jugada que te pide el tablero en esa posición, pero Tg3 tampoco está mal.</em>
	</p>
	<p>
		<b>- R: Claro, pero el remate que hiciste luego, con Tg7+ fue muy bueno.</b>
		<br>
		<em class="italica">- J: Si, creo que esta jugada fuerza el abandono. También me gustó mucho.</em>
	</p>
	<p>
		<b>- R: Bueno Jorge, muchas gracias por tu colaboración en Taller de Ajedrez.</b>
		<br>
		<em class="italica">- J: Un gusto, cuando quieras comentamos la otra partida.</em>
	</p>
	<p>
		<b>- R: Buenísimo, con esto damos por terminada esta entrevista.</b>
	</p>
	<p>
		<a href="<?= base_url('partida-1') ?>" title="Partida">Clic aquí para ver la partida completa</a>
	</p>
	<p>Artículo publicado el <time datetime="2017-02-28" pubdate>28 de Febrero de 2017</time>, por Taller de Ajedrez.</p>
			</div>
			</article>
<?php
$this->load->view('footer_view');
?>
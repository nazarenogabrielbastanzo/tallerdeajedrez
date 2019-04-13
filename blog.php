

<div class="w3-container">
	<h1><i class="fa fa-rss w3-xxlarge" aria-hidden="true" style="color: #3F51B5;"></i>&nbsp;Blog</h1>
	<div class="<?php //w3-col s12 m12 l9 ?>w3-padding">
	<section>
		<article class="blog">
			<h1>Partidas Amistosas</h1>
			<p style="text-align: left;" class="articulo__descripcion">Muchas son las ocasiones en las que se pueden jugar partidas amistosas de ajedrez: entre ronda y ronda de un torneo, antes o después de un torneo, en casa, en la plaza, en el tren, y un largo etcétera... </p>
			<div class="articulo__detalle">
			<p style="text-align: justify;">
			Las partidas amistosas que colocamos en Taller de Ajedrez, fueron jugadas en algunas de estas tantas ocasiones que mencionamos unas líneas más arriba.
	Pero cabe destacar que estas partidas, que llamamos “amistosas”, al no jugarse formalmente sino que se juegan amistosamente (valga la redundancia), pierden un poco de valor teórico, y ganan mucho valor práctico. Me refiero a que no se hacen las mejores jugadas “de libro”, pero sí las mejores jugadas de “ese momento”, el momento en que fueron realizadas. Es así como podemos encontrar partidas “de este tipo” (amistosas), que no dicen mucho a quien busca en ellas una partida ejemplar pero, al visualizarlas en su totalidad, se encuentran detalles muy finos: combinaciones de todo tipo, jugadas posicionales estupendas, remates “de libro”, etcétera.
	Es por eso que en Taller de Ajedrez, no nos ahorramos el trabajo de colocarlas en la sección “Partidas/Amistosas”, como se puede apreciar si colocamos el mouse por encima de la solapa “Partidas”, y luego seleccionamos, con un clic, la opción “Amistosas”. <br>
	En esta ocasión, quisiera compartir con ustedes una breve entrevista con alguien que aportó las primeras partidas amistosas que se publicaron en el sitio:
	Es un gusto para mi presentarles a mi papá: ¡Jorge Raúl Bastanzo! (ver Foto)</p>
	<img src="img/jorgeraulbastanzo.jpg" alt="Jorge Raúl Bastanzo" style="width: 100%; border-radius: 10px;">
	<p>
		<b>- Redactor (R): ¡Buenos días papi! o bien, ¡Buenos días Jorge! ¿Cómo estás?</b>
		<br>
		<i class="italica">- Jorge (J): ¡Hola Nazareno!, ¡Buenas días!, ¡Yo bien! ¿Y vos?</i>
	</p>
	<p>
		<b>- R: Bien, decime: ¿Cuál es la partida amistosa, de las publicadas en Taller de Ajedrez hasta ahora, que más te gustó?</b>
		<br>
		<i class="italica">- J: Me gustó más la que jugué con Carlos. </i>
	</p>
	<p>
		<b>- R: Ok, ¿Podrías contarnos bajo qué condiciones se disputó la partida? </b>
		<br>
		<i class="italica">- J: Bueno, como detalles ambientales puedo decirte que se jugó en un torneo de partidas rápidas a 5 minutos por jugador en un club. Los jugadores de categoría superior tenían que darnos algunos minutos de handicap en el reloj. Cuando estábamos por empezar Carlos sonriendo me dijo: “yo no pido ni doy ventaja”, mientras corregía la posición inicial del reloj. Sería entonces a 5 minutos; le dije que estaba de acuerdo. Era posible que lógicamente perdiera, pero no estaba dispuesto a no luchar por el punto. </i>
	</p>
	<p>
		<b>- R: Ok, y ¿cuáles fueron las cosas que más te gustaron de esta partida?</b>
		<br>
		<i class="italica">- J: Inicialmente intenté jugar una apertura de peón dama, pero cuando juega c5 veo que me quiere sacar de lo que me gusta jugar a mi. Podía avanzar el peón a d5, buscando un esquema benoni, pero me decidí por Cf3 que es más elástica y finalmente se transforma en una siciliana por transposición. También los enroques opuestos, definieron una partida de ataque. </i>
	</p>
	<p>
		<b>- R: ¿Te gustó alguna jugada en particular?</b>
		<br>
		<i class="italica">- J: Me gustó 18. Te5, por la doble amenaza de Af7 y Tg5, ganando.</i>
	</p>
	<p>
		<b>- R: En la jugada 19, ¿no era mejor directamente Tg5?</b>
		<br>
		<i class="italica">- J: Sí es la jugada que te pide el tablero en esa posición, pero Tg3 tampoco está mal.</i>
	</p>
	<p>
		<b>- R: Claro, pero el remate que hiciste luego, con Tg7+ fue muy bueno.</b>
		<br>
		<i class="italica">- J: Si, creo que esta jugada fuerza el abandono. También me gustó mucho.</i>
	</p>
	<p>
		<b>- R: Bueno Jorge, muchas gracias por tu colaboración en Taller de Ajedrez.</b>
		<br>
		<i class="italica">- J: Un gusto, cuando quieras comentamos la otra partida.</i>
	</p>
	<p>
		<b>- R: Buenísimo, con esto damos por terminada esta entrevista.</b>
	</p>
	<p>

<?php $partida_id = "1"; ?>

<?php
require_once 'admin/config.php';
@ $enlace = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($enlace) {
    mysqli_set_charset($enlace, 'utf8');
$consulta = "SELECT * FROM partidas WHERE partida_id = $partida_id";
    $rs = mysqli_query($enlace, $consulta);
	if (!$rs) {
	    die('Hubo un error al procesar la petición.');
	}
} else {
    die('No se pudo conectar a la base de datos.');
}
mysqli_close($enlace);

?>
<?php if ( $reg = mysqli_fetch_assoc($rs) ): ?>
		<a href="<?= "?page=partida&partida={$reg['vinculo']}&blancas={$reg['blancas']}&negras={$reg['negras']}&resultado={$reg['resultado']}&meGusta={$reg['meGusta']}&partida_id={$reg['partida_id']}"; ?>" title="Partida">Clic aquí para ver la partida completa</a>
<?php endif; ?>
	</p>
	<p>Artículo publicado el 28 de Febrero de 2017, por Taller de Ajedrez.</p>
			</div>
			</article>
			<hr>
			<article class="blog">
			<h1 style="color: #3F51B5;">Partida Tringov - Fischer</h1>
			<p style="text-align: left;" class="articulo__descripcion">Tringov - Fischer, Capablanca Memorial (1965): Esta partida tiene una curiosa historia, se jugó por teletipo ya que las autoridades de Estados Unidos no le permitieron a Fischer viajar a La Habana a jugar el torneo... </p>
			<div class="articulo__detalle"><p style="text-align: justify;">
			era la época de la "guerra fría" entre las dos principales potencias mundiales, EEUU y la URSS. Este hecho hizo que las partidas duraran muchas horas, ya que las comunicaciones en esa época no eran tan eficientes; entre jugada y jugada había muchos minutos de espera, no sólo por la reflexión de los jugadores, sino además por el tiempo que insumía el proceso de enviarlas y recibir las respuestas. Durante la partida, la jugada 12...Ab4 de Fischer (ver Diagrama) </p>
	<img src="img/Tringov_Fischer_Diagrama1.jpg" alt="Diagrama 1" class="w3-image">
	<p style="text-align: justify;">causó sorpresa ya que se consideraba muy inferior. Posteriormente, al recibir por el teletipo la jugada 18... Cc6, Tringov directamente pidió confirmación de la misma pues no podía creer que el genial Bobby cayera en una linea que lo conducía a recibir mate en un par de jugadas luego de 19.Df7 y 20.Dg8++ (ver Diagrama).</p>
	<img src="img/Tringov_Fischer_Diagrama2.jpg" alt="Diagrama 2" class="w3-image">
	<p style="text-align: justify;">La jugada 20...Cf6!! fue un baldazo de agua helada... (ver Diagrama) </p>
	<img src="img/Tringov_Fischer_Diagrama3.jpg" alt="Diagrama 3" class="w3-image">
	<p style="text-align: justify;">Fischer así refutó la teoría del momento y obligó a abandonar a su rival en un par de jugadas.</p>
	<p>
	
<?php $partida_id1 = "47"; ?>

<?php
require_once 'admin/config.php';
@ $enlace1 = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($enlace1) {
    mysqli_set_charset($enlace1, 'utf8');
$consulta1 = "SELECT * FROM partidas WHERE partida_id = $partida_id1";
    $rs1 = mysqli_query($enlace1, $consulta1);
	if (!$rs1) {
	    die('Hubo un error al procesar la petición.');
	}
} else {
    die('No se pudo conectar a la base de datos.');
}
mysqli_close($enlace1);

?>
	
<?php if ( $reg1 = mysqli_fetch_assoc($rs1) ): ?>
		<a href="<?= "?page=partida&partida={$reg1['vinculo']}&blancas={$reg1['blancas']}&negras={$reg1['negras']}&resultado={$reg1['resultado']}&meGusta={$reg1['meGusta']}&partida_id={$reg1['partida_id']}"; ?>" title="Partida">Clic aquí para ver la partida completa</a>
<?php endif; ?>
</p>
	<p>Artículo publicado el 26 de Febrero de 2017, por Nazareno Gabriel Bastanzo.</p>
			</div>
		</article>
	</section>
	</div>
	<?php /* ?>
	<div class="w3-col s12 m12 l3 w3-padding">
	<img src="img/calendar.png" alt="Archivo">
	<h2 style="color: #3F51B5;">Archivo</h2>
	<select name="meses" onchange="location = this.value">
	<option value="?page=inicio">Seleccionar mes...</option>
	<option value="?page=Febrero2017">Febrero 2017 (2)</option>
	</select>
	</div>
	<?php */ ?>
</div>
<script src="js/pluginBlog.js"></script>
<script src="js/scriptBlog.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "../master.dwt" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!-- #BeginEditable "doctitle" -->
<title>Contacto | Taller de ajedrez</title>
<!-- #EndEditable -->
<meta content="Taller,Ajedrez,Nazareno,Gabriel,Bastanzo,Partidas,Fotos,Frases" name="keywords" />
<meta content="En este sitio web encontrarán partidas de ajedrez muy interesantes. También encontrarán fotos de torneos de ajedrez." name="description" />
<link href="../styles/style2.css" media="screen" rel="stylesheet" title="CSS" type="text/css" />
<link href="../styles/menu.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../script.js" type="text/javascript"></script>
<style type="text/css">

.auto-style1 {
	border-width: 0;
}
.auto-style2 {
	color: #FFFFFF;
}
.auto-style3 {
	border-style: solid;
	border-width: 0;
}
.auto-style4 {
	text-align: center;
}
</style>
</head>

<body>

<!-- Begin Container -->
<div id="container">
	<!-- Begin Masthead -->
	<div id="masthead">
		<p><a href="../index.htm">
		<img alt="" height="73" src="../images/Logo.png" width="333"class="auto-style1" /></a></p>
	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<!-- MENU -->
		<div id='cssmenu'>
		<ul>
		   <li><a href='../index.htm'><span>Principal</span></a></li>
		   <li><a href='../partidas/partidas.htm'><span>Partidas</span></a></li>
		   <li><a href='../frases/frases.htm'><span>Frases</span></a></li>
		   <li><a href='../photo_gallery/photo_gallery.htm'><span>Fotos</span></a></li>
		   <li><a href='contact.htm'><span>Contacto</span></a></li>
		   <li><a href='../suscribe/suscribe.htm'><span>Suscribirse</span></a></li>
		   <li class='last'><a href='../buscar/buscar.htm'><span>Buscar</span></a></li>
		</ul>
		</div>
	<!-- End Navigation -->
	<!-- Begin Page Content -->
	<div id="page_content">
		<!-- Begin Left Column -->
		<div id="column_l">
			<!-- #BeginEditable "content" -->
			<h2>Póngase en contacto conmigo</h2>
			<p>Usted puede comunicarse conmigo completando el siguiente 
			formulario:</p>
			<h3>Formulario</h3>
			<form action="insertar1.php" method="post" name="form">
				<br />
</form>
<?php
include("conexion.php");
$con = mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problemas al conectar la base de datos");
mysql_query("INSERT INTO comments (nombre,email,comentarios) VALUES ('$_POST[nombre]','$_POST[email]','$_POST[comentarios]')",$con);
echo "Mensaje enviado. Gracias.";
?>
			<!-- #EndEditable --></div>
		<!-- End Left Column -->
		<!-- Begin Right Column -->
		<div id="column_r">
			<!-- #BeginEditable "sidebar" -->
			<!-- #EndEditable --></div>
		<!-- End Right Column --></div>
	<!-- End Page Content -->
	<!-- Begin Footer -->
	<div id="footer">
	<p class="auto-style4">
			<a href="http://www.contadorvisitasgratis.com" target="_Blank" title="contador de visitas gratis">contador de visitas gratis</a><br>
<script type="text/javascript" src="http://counter6.statcounterfree.com/private/countertab.js?c=509b25e60925dbb806608d8ebca7de5e"></script>
</p>
		<p><a href="../index.htm">Principal</a> |
		<a href="../partidas/partidas.htm" target="_self">Partidas</a> |
		<a href="../frases/frases.htm" target="_self">Frases</a> |
		<a href="../photo_gallery/photo_gallery.htm">Fotos</a> |
		<a href="contact.htm">Contacto</a> |
		<a href="../suscribe/suscribe.htm" target="_self">Suscribirse</a> |
		<a href="../buscar/buscar.php" target="_self">Buscar</a>
		<a href="https://www.facebook.com/TallerDeAjedrez" target="_self">
		<img alt="Facebook" class="auto-style3" height="32" src="../images/icons/32/thumbup.png" style="float: right" width="32" /></a>
		<a href="https://twitter.com/TallerdeAjedre2" target="_self">
		<img alt="Twitter" class="auto-style3" height="32" src="../images/icons/32/twitter.png" style="float: right" width="32" /></a></p>
		<p>Copyright &copy; 2015 Taller de Ajedrez. Reservados todos los 
		derechos.</p>
	</div>
	<!-- End Footer --></div>
<!-- End Container -->

</body>

<!-- #EndTemplate -->

</html>
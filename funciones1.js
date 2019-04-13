$(document).ready(function(){
	//
	//Partidas
	var partidas = $('#submenu1');
	var amistosas = $('<li><a href="partidas_amistosas.html" class="last">Amistosas</a></li>');
	//var deTorneos = $('<li><a href="partidas_deTorneo.html">De Torneos</a></li>');
	var deGMs = $('<li><a href="partidas_deGM.html">De GMs</a></li>');
	var deInternet = $('<li><a href="partidas_deInternet.html">De Internet</a></li>');
	var inmortales = $('<li><a href="partidas_inmortales.html">Inmortales</a></li>');
	var cadaPartida = [deInternet, deGMs, inmortales];
	cadaPartida.push(amistosas);
	partidas.append(cadaPartida);
	//
	//CopyRight
	/*
	var derechos = $('#derechos');
	var anio = $('<span>2017</span>'); //cambiar aquí el año
	derechos.append(anio);
	*/
	//
	//asides
	var asides = $('#noindex');
	var aside = $('<p>Estimados visitantes de Taller de Ajedrez: los invitamos a que nos envíen alguna partida de ajedrez de ustedes, la cual será evaluada para su posterior publicación. Para ello, pueden ponerse en contacto con nosotros, haciendo <a href="contacto.html">clic aquí</a> ¡Saludos!</p>');
	asides.append(aside);
	//
	//fotos
	var fotos = $('#submenu2');
	//var fotosElegidas = $('<li><a href="fotos_elegidas.html">Elegidas</a></li>');
	var fotosDeTorneos = $('<li><a href="fotos_torneos.html" class="last">De Torneos</a></li>');
	var cadaGaleria = [fotosDeTorneos];
	fotos.append(cadaGaleria);
	//
	//menu
	var menu = $('#menu');
	//var frases = $('<li><a href="frases.html">Frases</a></li>');
	//var contacto = $('<li><a href="contacto.html">Contacto</a></li>');
	var blog = $('<li class="menu"><a href="blog/index.html">Blog</a></li>');
	var cadaMenu = [blog];
	menu.append(cadaMenu);
	//
	$('#menu>li').addClass('menu');
	$('.menu>a').css('border-radius', '20px 20px 0 0');
	$('.last').css('border-radius', '0 0 20px 20px');
});
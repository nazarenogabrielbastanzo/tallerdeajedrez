jQuery(document).ready(function($){
	/*
	Inicia slice
	*/
	var numeroSlide = 1;
	var formatearLoop = false;
	var cantidadImg = $('#slide ul li').length;
	$('#slide ul').css({'width' : (cantidadImg * 100) + '%'});
	$('#slide ul li').css({'width' : (100 / cantidadImg) + '%'});
	//indicador
	$('#indicator li').click(function(){
		var roleSlide = $(this).attr('role-slide');
		$('#slide ul li').css({
			'display' : 'none'
		});
		$('#slide ul li:nth-child('+ roleSlide +')').fadeIn(1500);
		$('#indicator li').css({
			'opacity' : '.5'
		});
		$(this).css({
			'opacity' : '1'
		});
		formatearLoop = true;
		numeroSlide = roleSlide;
	});

	//funcion avanzar
	function avanzar(){
		if (numeroSlide >= cantidadImg) {
			numeroSlide = 1;
		} else {
			numeroSlide++;	
		}
		$('#slide ul li').css({
			'display' : 'none'
		});
		$('#slide ul li:nth-child('+ numeroSlide +')').fadeIn(1500);
		$('#indicator li').css({
			'opacity' : '.5'
		});
		$('#indicator li:nth-child('+ numeroSlide +')').css({
			'opacity' : '1'
		});
	}

	//derecha

	function derecha () {
		avanzar();
		formatearLoop = true;
	}

	$(document).keyup(function(e){
		if (e.keyCode == 39) {
			derecha();
		}
	});

	$('#right').click(function(){
		derecha();
	});

	//izquierda
	
	function izquierda () {
		if (numeroSlide <= 1) {
			numeroSlide = cantidadImg;
		} else {
			numeroSlide--;
		}
		$('#slide ul li').css({
			'display': 'none'
		});
		$('#slide ul li:nth-child(' + numeroSlide + ')').fadeIn(1500);
		$('#indicator li').css({
			'opacity': '.5'
		});
		$('#indicator li:nth-child(' + numeroSlide + ')').css({
			'opacity': '1'
		});
		formatearLoop = true;
	}

	$(document).keyup(function(e){
		if (e.keyCode == 37) {
			izquierda();
		}
	});

	$('#left').click(function(){
		izquierda();
	});
	//loop
	setInterval(function(){
		if (formatearLoop) {
			formatearLoop = false;
		} else {
			avanzar();
		}
	},5500);
});

/*
	Finaliza slice
*/
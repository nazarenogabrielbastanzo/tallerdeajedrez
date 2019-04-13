(function( $ ) {
	$.fn.articulo = articuloPlugin;

	function articuloPlugin(opciones){

		//para manejar opciones por defecto declaramos un objeto JSON
		var opcionesDefault = {
			descSelector: '.articulo__descripcion',
			detSelector: '.articulo__detalle',
			verMasTexto: 'Leer artículo',
			verMasClass: 'articulo__verMas',
			cerrarTexto: 'Cerrar artículo',
			cerrarClass: 'articulo__cerrar',
			delay: 1000
		}

		//que luego es combinado con el argumento opciones que recibe la función
		var opcionesPlugin = $.extend(opcionesDefault, opciones);

		this.each(hacer);

		function hacer(){
			//para luego acceder a las propiedades p.ej. opcionesPlugin.verMasTexto
			var $verMas = $('<button></button>').html(opcionesPlugin.verMasTexto).addClass(opcionesPlugin.verMasClass);
			var $cerrar = $('<button></button>').html(opcionesPlugin.cerrarTexto).addClass(opcionesPlugin.cerrarClass);
			
			//por el momento basta entender que la palabra clave this refiere al objeto jQuery que ejecutó la función articulo()
			var $desc = $(this).find(opcionesPlugin.descSelector);
			var $detalle = $(this).find(opcionesPlugin.detSelector);
			
			$desc.append($verMas);
			$detalle.append($cerrar);
			
			$detalle.hide();
			
			$verMas.click(mostrarDetalle);
			$cerrar.click(ocultarDetalle);
			
			function mostrarDetalle(){
			$detalle.fadeIn(opcionesPlugin.delay);
			$verMas.hide();
			$cerrar.show();
			}
			function ocultarDetalle(){
			$detalle.fadeOut(opcionesPlugin.delay);
			$verMas.show();
			$cerrar.hide();
			}
		}
	}
}( jQuery ));
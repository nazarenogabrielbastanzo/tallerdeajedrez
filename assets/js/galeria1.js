jQuery(document).ready(function($){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 19;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="img/torneo_almacen_cultural_zarate_2010('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
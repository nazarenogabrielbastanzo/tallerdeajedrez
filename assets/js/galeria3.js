jQuery(document).ready(function($){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 82;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="img/Torneo_Equipos_Escobar_21_nov_2010('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
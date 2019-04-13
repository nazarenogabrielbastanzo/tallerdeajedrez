jQuery(document).ready(function($){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 124;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="img/torneo_grand_prix_zarate_2010('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
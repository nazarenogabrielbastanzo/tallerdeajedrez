$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 158;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="img/torneo_adelman_escobar_2011('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
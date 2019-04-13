jQuery(document).ready(function($){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 8;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="img/VillaMartelliConJudithPolgar('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
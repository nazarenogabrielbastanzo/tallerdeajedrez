$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 66;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="images/1er_ronda_adelman_escobar_2011('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 8;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="images/VillaMartelliConJudithPolgar('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
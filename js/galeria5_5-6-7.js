$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 161;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="img/IX_Torneo_Abierto_Escobar_Jorge_Adelman_2011_5-6-7_rondas('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
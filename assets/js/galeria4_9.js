jQuery(document).ready(function($){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 84;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="img/LXI_Torneo_Abierto_Verano_2011_9na_ronda('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 118;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="images/LXI_Torneo_Abierto_Verano_2011_8va_ronda('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 185;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="images/LXI_Torneo_de_Verano_2011_5ta_ronda('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
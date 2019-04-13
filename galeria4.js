$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 175;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="images/LXI_Torneo_Abierto_Verano_2011_Villa_Ballester('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
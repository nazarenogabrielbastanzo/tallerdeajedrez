$(document).ready(function(){
	var $cadaImg = $('#slide ul');
	var cantidadImgs = 89;
	for (var i = 1; i <= cantidadImgs; i++) {
		var imgs = $('<li><img src="images/LXI_Torneo_de_Verano_3eray4ta('+ i +').jpg"/></li>');
		$cadaImg.append(imgs);
	}
});
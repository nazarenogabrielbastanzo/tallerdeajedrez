function mostrarCartel() {
    document.getElementById('id01').style.display='block';	
}

$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        w3.hide('#id01');
    }
});
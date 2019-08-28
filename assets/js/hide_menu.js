// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;

/**
* outerHeight() obtiene la altura externa actual calculada 
* (incluido el relleno, el borde y, opcionalmente, el margen) 
* para el primer elemento del conjunto de elementos coincidentes
*/
var navbarHeight = $('menu').outerHeight();
/**/
$(window).scroll(function(){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Asegúrese de que se desplacen más que delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // Esto es necesario para que nunca vea lo que está "detrás" de la barra de navegación.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        scrollDown();
    } else {
        // Scroll Up
        scrollUp();
    }

    /** 
    * Si se desplazaron hacia abajo y pasaron la barra de navegación, 
    * quita la clase .sticky-top y agregue la clase .nav-up.
    */
    function scrollDown() {
      $('menu').removeClass('sticky-top').addClass('nav-up');
    }
    /**/

    /**
    * Si se desplazan hacia arriba, quita la clase .nav-up
    * y agregue la clase .sticky-top 
    */
    function scrollUp() {
      if(st + $(window).height() < $(document).height()) {
          $('menu').removeClass('nav-up').addClass('sticky-top');
      }
    }
    /**/

    lastScrollTop = st;
}

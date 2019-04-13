var app = angular.module('myApp', []);
app.controller('partidasInmortales', function($scope) {
    $scope.partidas = [
        {blancas: 'Adolf Anderssen', negras: 'Lionel Adalbert Bagration Felix Kieseritzky', resultado: '1 - 0', anio: '1851', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_inmortal1.html'},
        {blancas: 'Adolf Anderssen', negras: 'Jean Dufresne', resultado: '1 - 0', anio: '1852', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_inmortal2.html'},
        {blancas: 'Johannes Zukertort', negras: 'Joseph Henry Blackburne', resultado: '1 - 0', anio: '1883', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_inmortal3.html'},
        {blancas: 'Wilhelm Steinitz', negras: 'Curt von Bardeleben', resultado: '1 - 0', anio: '1895', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_inmortal4.html'}
    ];
    $scope.orderByMe = function(x) {
        $scope.myOrderBy = x;
    };
});
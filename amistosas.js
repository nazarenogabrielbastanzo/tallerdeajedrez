var app = angular.module('myApp', []);
app.controller('partidasAmistosas', function($scope) {
    $scope.partidas = [
        {blancas: 'Bastanzo, Jorge Raúl', negras: 'Carlos', resultado: '1 - 0', anio: '1980', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_amistosa1.html'},
        {blancas: 'Bastanzo, Jorge Raúl', negras: '?', resultado: '1 - 0', anio: '1984', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_amistosa2.html'}
    ];
    $scope.orderByMe = function(x) {
        $scope.myOrderBy = x;
    };
});
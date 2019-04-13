var app = angular.module('myApp', []);
app.controller('partidasGM', function($scope) {
    $scope.partidas = [
        {blancas: 'Vassily Ivanchuk', negras: 'Viswanathan Anand', resultado: '1 - 0', anio: '2016', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deGM1.html'},
        {blancas: 'F. Caruana', negras: 'F. Nakamura', resultado: '1 - 0', anio: '2016', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deGM2.html'},
        {blancas: 'B. Ider', negras: 'Yifán Hou', resultado: '0 - 1', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deGM3.html'},
        {blancas: 'Sandro Mareco', negras: 'Tomás Sosa', resultado: '1 - 0', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deGM4.html'},
        {blancas: 'Serguéi Kariakin', negras: 'Baskaran Adhiban', resultado: '0 - 1', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deGM5.html'}
    ];
    $scope.orderByMe = function(x) {
        $scope.myOrderBy = x;
    };
});
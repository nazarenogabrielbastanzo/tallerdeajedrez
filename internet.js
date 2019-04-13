var app = angular.module('myApp', []);
app.controller('partidasInternet', function($scope) {
    $scope.partidas = [
        {blancas: 'szurtos', negras: 'nazarenobastanzo', resultado: '0 - 1', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deInternet1.html'},
        {blancas: 'hyderho', negras: 'nazarenobastanzo', resultado: '0 - 1', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deInternet2.html'},
        {blancas: 'jbastanzo', negras: 'MirekVeverka', resultado: '1 - 0', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deInternet3.html'},
        {blancas: 'OliverOnion', negras: 'nazarenobastanzo', resultado: '0 - 1', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deInternet4.html'},
        {blancas: 'nazarenobastanzo', negras: 'Spillpants', resultado: '1 - 0', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deInternet5.html'},
        {blancas: 'jbastanzo', negras: 'mozartpraga', resultado: '1 - 0', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deInternet6.html'},
        {blancas: 'AfolabiS', negras: 'nazarenobastanzo', resultado: '0 - 1', anio: '2017', vinculo: 'http://www.tallerdeajedrez.com.ar/partida_deInternet7.html'}
        ];
    $scope.orderByMe = function(x) {
        $scope.myOrderBy = x;
    };
});
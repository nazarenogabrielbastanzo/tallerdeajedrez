var app = angular.module('myApp', []);
app.controller('partidasTorneo', function($scope) {
    $scope.partidas = [
        {blancas: '', negras: '', resultado: '', anio: '', vinculo: ''}
    ];
    $scope.orderByMe = function(x) {
        $scope.myOrderBy = x;
    };
});
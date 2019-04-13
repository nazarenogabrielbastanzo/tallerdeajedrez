var app = angular.module('myApp', []);
app.controller('fotosTorneos', function($scope) {
    $scope.fotos = [
        {torneo: 'Día de los Maestros', lugar: 'Almacén Cultural de Zárate, Buenos Aires, Argentina.', fecha: '11 de Septiembre de 2010', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo1.html'},
        {torneo: 'Grand Prix en Zárate', lugar: 'Zárate, Buenos Aires, Argentina.', fecha: '9 de Octubre de 2010', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo2.html'},
        {torneo: 'Torneo por Equipos', lugar: 'Belén de Escobar, Buenos Aires, Argentina.', fecha: '21 de Noviembre de 2010', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo3.html'},
        {torneo: 'LXI Torneo Abierto de Verano, 80 Aniversario. (1er. y 2da. rondas)', lugar: 'Villa Ballester, Buenos Aires, Argentina.', fecha: '22 de Enero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo4_1-2.html'},
        {torneo: 'LXI Torneo Abierto de Verano, 80 Aniversario. (3er. y 4ta. rondas)', lugar: 'Villa Ballester, Buenos Aires, Argentina.', fecha: '23 de Enero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo4_3-4.html'},
        {torneo: 'LXI Torneo Abierto de Verano, 80 Aniversario. (5ta. ronda)', lugar: 'Villa Ballester, Buenos Aires, Argentina', fecha: '25 de Enero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo4_5.html'},
        {torneo: 'LXI Torneo Abierto de Verano, 80 Aniversario. (6ta. ronda)', lugar: 'Villa Ballester, Buenos Aires, Argentina', fecha: '26 de Enero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo4_6.html'},
        {torneo: 'LXI Torneo Abierto de Verano, 80 Aniversario. (7ma. ronda)', lugar: 'Villa Ballester, Buenos Aires, Argentina', fecha: '28 de Enero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo4_7.html'},
        {torneo: 'LXI Torneo Abierto de Verano, 80 Aniversario. (8va. ronda)', lugar: 'Villa Ballester, Buenos Aires, Argentina', fecha: '29 de Enero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo4_8.html'},
        {torneo: 'LXI Torneo Abierto de Verano, 80 Aniversario. (9na. ronda)', lugar: 'Villa Ballester, Buenos Aires, Argentina', fecha: '30 de Enero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo4_9.html'},
        {torneo: 'IX Torneo Abierto en Memoria de Jorge Adelman (1er. ronda)', lugar: 'Belén de Escobar, Buenos Aires, Argentina', fecha: '4 de Febrero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo5_1.html'},
        {torneo: 'IX Torneo Abierto en Memoria de Jorge Adelman (2da., 3er. y 4ta. rondas)', lugar: 'Belén de Escobar, Buenos Aires, Argentina', fecha: '5 de Febrero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo5_2-3-4.html'},
        {torneo: 'IX Torneo Abierto en Memoria de Jorge Adelman (5ta., 6ta. y 7ma. rondas)', lugar: 'Belén de Escobar, Buenos Aires, Argentina', fecha: '6 de Febrero de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo5_5-6-7.html'},
        {torneo: 'Villa Martelli con Judith Polgar', lugar: 'Villa Martelli, Buenos Aires, Argentina', fecha: '11 de Junio de 2011', vinculo: 'http://www.tallerdeajedrez.com.ar/fotos_torneo6.html'}
    ];
    $scope.orderByMe = function(x) {
        $scope.myOrderBy = x;
    };
});
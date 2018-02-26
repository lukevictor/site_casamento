/**
 * Controller Angular para a pagina inicial.
 * 
 * @author felipe.leao
 */
app.controller('LandingController', function ($scope, $log, $timeout, moment) {

    $scope.dataAtual = moment();
    $scope.dataCasamento = moment("2018-08-11 19:30");
    $scope.animarConjuge = false;
    $scope.animarSubtitulo = false;
    $scope.animarCountdown = false;

    /**
     * Metodo de inicializacao da pagina
     */
    $scope.init = function(){
        $timeout(function() { $scope.animarConjuge = true;}, 500);
        $timeout(function() { $scope.animarSubtitulo = true;}, 1000);
        $timeout(function() { $scope.animarCountdown = true;}, 1500);
    };

    



});


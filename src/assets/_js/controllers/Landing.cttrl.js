/**
 * Controller Angular para a pagina inicial.
 * 
 * @author felipe.leao
 */
app.controller('LandingController', function ($scope, $log, $timeout, moment) {

    $scope.dataAtual = moment();
    $scope.dataCasamento = moment("2018-08-11 19:30");

    /**
     * Metodo de inicializacao da pagina
     */
    $scope.init = function(){
        $timeout(function() { $scope.fadeIn = true;});
    };

    



});


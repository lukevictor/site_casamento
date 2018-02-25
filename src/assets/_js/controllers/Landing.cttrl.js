/**
 * Controller Angular para a pagina Projeto
 * 
 * @author felipe.leao
 */
app.controller('LandingController', function ($scope, $log, moment) {

    $scope.dataAtual = moment();
    $scope.dataCasamento = moment("2018-08-11 19:30");

    /**
     * Metodo de inicializacao da pagina
     */
    $scope.init = function(){
        $scope.meses = $scope.dataCasamento.fromNow();
        $scope.dias = $scope.dataCasamento.diff($scope.dataAtual, 'hours');
        $scope.horas = $scope.dataCasamento.diff($scope.dataAtual, 'minutes');
        $scope.minutos = $scope.dataCasamento.diff($scope.dataAtual, 'seconds');
        $log.debug($scope.meses);
        $log.debug($scope.dias);
        $log.debug($scope.horas);
        $log.debug($scope.minutos);
    };

    



});


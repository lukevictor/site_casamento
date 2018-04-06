/**
 * Controller Angular para o formulario de confirmacao de presenca.
 * 
 * @author felipe.leao
 */
app.controller('FormularioPresencaController', function ($scope, $log) {

    $scope.ordemAcompanhante = 0;
    $scope.formulario = {
        'convidado' : null,
        'email': null,
        'comparecimento' : null,
        'acompanhantes' : []
    };

    /**
     * Metodo de inicializacao do formulario
     */
    $scope.init = function(){
    
    };

    
    $scope.adicionarAcompanhante = function(){
        $scope.formulario.acompanhantes.push({nome:null, ordem:$scope.ordemAcompanhante++});
    };

    $scope.removerAcompanhante = function(ac){
        $scope.formulario.acompanhantes.splice($scope.formulario.acompanhantes.indexOf(ac),1);
    };

    $scope.enviar = function(){
        //TODO validar o formulario e enviar por ajax
        //TODO Enquanto o envio estiver ocorrendo, mostrar loading
        //TODO Ao fim da chamada ajax, exibir mensagem de sucesso.
    };

});


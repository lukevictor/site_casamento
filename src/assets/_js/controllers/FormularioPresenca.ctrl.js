/**
 * Controller Angular para o formulario de confirmacao de presenca.
 * 
 * @author felipe.leao
 */
app.controller('FormularioPresencaController', function ($scope, $log, formularioPresencaAPI) {

    $scope.loading = false;
    $scope.exibirMensagemSucesso = false;
    $scope.exibirMensagemErro = false;
    $scope.ordemAcompanhante = 0;
    $scope.erros = {};
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
        if(_validarFormulario()){
            $scope.loading = true;
            formularioPresencaAPI.enviarConfirmacao($scope.formulario).then(
                function sucesso(){
                    $scope.exibirMensagemSucesso = true;
                    $scope.exibirMensagemErro = false;
                }, 
                function erro(){
                    $scope.exibirMensagemSucesso = false;
                    $scope.exibirMensagemErro = true;
                }
            ).finally(function(){
                $scope.loading = false;
            }, angular.noop);
        }
    };

    function _validarFormulario() {
        $scope.erros = {};

        if(!$scope.formulario.convidado || $scope.formulario.convidado.trim() === "" )
            $scope.erros.convidado = "Campo obrigatório";
        if($scope.formulario.convidado && ($scope.formulario.convidado.trim().length <= 3 || $scope.formulario.convidado.trim().indexOf(" ") === -1))
            $scope.erros.convidado = "Insira o nome inteiro do convidado";
        if(!$scope.formulario.email || $scope.formulario.email.trim() === "" )
            $scope.erros.email = "Formato inválido";
        if(!$scope.formulario.comparecimento)
            $scope.erros.comparecimento = "<i class='fas fa-times fa-fw'></i>Selecione uma op&ccedil;&atilde;o";

        return angular.equals($scope.erros, {});
    }

});


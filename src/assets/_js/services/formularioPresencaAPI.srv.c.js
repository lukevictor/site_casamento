/**
 * API de servico para atender a pagina de confirmacao de presenca.
 * 
 * @author felipeleao
 */
app.factory("formularioPresencaAPI", function ($http, $log) {

    var _enviarConfirmacao = function (formulario) {
        $log.debug("Invocando o envio de confirmacao.");
		return $http.post("confirmar.php", formulario);
    };


    return {
        enviarConfirmacao: _enviarConfirmacao
    };
});
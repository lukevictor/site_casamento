/**
 * API de servico para atender a pagina de confirmacao de presenca.
 * 
 * @author Lucas leao
 */
app.factory("formularioPresencaAPI", function ($http, $log) {
    
    var _enviarConfirmacao = function (formulario, recaptchaToken) {
        $log.debug("Invocando o envio de confirmacao.");
		return $http.post("confirmar.php", {formulario: formulario, recaptcha: recaptchaToken});
    };


    return {
        enviarConfirmacao: _enviarConfirmacao
    };
});
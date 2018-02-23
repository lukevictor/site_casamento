app.factory("mensagensAPI", function(){
	
    /**
     * Formata a mensagem, substituindo os parâmetros posicionalmente.
     * @param mensagem - {String} Mensagem ou código do arquivo de mensagens (mensagens.js)
     * @param parametros - {Array} Lista de parâmetros
     * Ex: mensagem = 'Teste ${0} - ${1} - ${0}.'
     *     parametros = ['param 1', 'param 2']
    */
    var _montarMensagemParaExibicao = function(mensagem, parametros) {
        
        if (!/Mensagens\.\S+/.test(mensagem.trim())) return mensagem;

        var msg = _recuperar(mensagem);
        if (!msg) return _montarMensagemParaExibicao(
            'Mensagens.geral.erro.INTERNO_CLIENTE', 
            ['Mensagem com chave: <b>"'+mensagem+'"</b> inexistente.']);

        if (!parametros) return msg;

        parametros.forEach(function(parametro, i) {
            msg = msg.replace(new RegExp("\\$\\{"+i+"\\}", "g"), parametro);
        });

        return msg;
    };

    var _recuperar = function(mensagem) {
        var niveis = mensagem.split('.');
        var objeto = Mensagens;
        for (i = 1; i < niveis.length; i++) {
            objeto = objeto[niveis[i]];
        }
        return objeto;
    };
	
	return {
		montarMensagemParaExibicao : _montarMensagemParaExibicao
	};
});
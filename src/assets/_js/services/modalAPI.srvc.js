/**
 * Servico para auxiliar com a criacao e exibicao de modais pela aplicação
 * 
 * @author lucas.victor
 */
app.factory("modalAPI", function($uibModal, $log, $interval, MODAL, mensagensAPI){
	var controllerDefault = 'DefaultModalController';

	
	/**
	 * Metodo para criar o modais de edicao ou de confirmacao da remocao de um tributo. 
	 * 
	 * @param urlTemplate - Caminho completo para o template a ser utilizado na tela
	 * @param controller - Controller Angular que deve ser utilizado pelo Modal
	 * @param closeCallback - Callback a ser chamado quando o modal for fechado. caso seja nulo um callback default eh chamado.
	 * @param dismissCallback - Callback a ser chamado quando o modal for dispensado. caso seja nulo um callback default eh chamado.
	 * @param tamanho - tamanho do modal. Verifique as opcoes na documentacao do $uibModal. (ex.: lg, sm)
	 * @param param - objeto com informacoes a serem passadas ao controller do modal (titulo, mensagem, tipoMensagem e item)
	 * @param renderizationCallback - callback a ser executado assim que o a renderizacao do modal tiver sido concluida (apos fim da animacao).
	 */
	var _criarModalPersonalizado = function (urlTemplate, controller, closeCallback, dismissCallback, tamanho, param, renderizationCallback) {
		// Definir parametros default.
		controller = !controller ? controllerDefault : controller;
		closeCallback = !closeCallback ? function(result){} : closeCallback;
		dismissCallback = !dismissCallback ? function(reason){} : dismissCallback;
		renderizationCallback = !renderizationCallback ? function(result){} : renderizationCallback;
		param = !param ? {} : param;
		var animation = (param.animation === undefined || param.animation === null || typeof param.animation !== 'boolean') ? true : param.animation;
		
		// Instanciar modal
		var _modalInstance = $uibModal.open({
			templateUrl: urlTemplate,
			controller: controller,
			backdrop: 'static',
			size: tamanho,
			animation: animation,
			resolve: {
				param: function () {
					return param;
				}
			}
		});
		
		// Adicionar callbacks
		_modalInstance.result.then(closeCallback, dismissCallback);
		// Executar callback na conclusao da renderizacao do modal
		_modalInstance.rendered.then(renderizationCallback);
		return _modalInstance;
	};


    var _criarModalConfirmar = function(closeCallback, dismissCallback, tamanho, param){
		var defaultParam = {'titulo': 'Confirmar', 'tipoMensagem':MODAL.CONFIRMAR , 'mensagem': Mensagens.geral.confirmacao.ACAO};
        return _criarModalPersonalizado('formularios/tpl_modal_confirmar.html', controllerDefault, closeCallback, dismissCallback, tamanho, _mesclarParam(defaultParam, param));
    };

    var _criarModalRemocao = function(closeCallback, dismissCallback, tamanho, param){
		tamanho = !tamanho ? 'sm' : tamanho;
		var defaultParam = {'titulo': 'Remover registro?', 'tipoMensagem':MODAL.REMOVER , 'mensagem': Mensagens.geral.confirmacao.EXCLUSAO};
        return _criarModalPersonalizado('formularios/tpl_modal_remover.html', controllerDefault, closeCallback, dismissCallback, tamanho, _mesclarParam(defaultParam, param));
    };

    var _criarModalErro = function(closeCallback, dismissCallback, tamanho, param){
		var defaultParam = {'titulo': 'Ocorreu um erro', 'tipoMensagem':MODAL.ERRO , 'mensagem': Mensagens.geral.erro.PROCESSAMENTO_REQUISICAO};
        return _criarModalPersonalizado('formularios/tpl_modal_erro_alerta.html',controllerDefault, closeCallback, dismissCallback, tamanho, _mesclarParam(defaultParam, param));
    };

	var _criarModalAlerta = function(closeCallback, dismissCallback, tamanho, param){
		var defaultParam = {'titulo': 'Aten&ccedil;&atilde;o', 'tipoMensagem':MODAL.ALERTA , 'mensagem':''};
        return _criarModalPersonalizado('formularios/tpl_modal_erro_alerta.html',controllerDefault, closeCallback, dismissCallback, tamanho, _mesclarParam(defaultParam, param));
    };

    var _criarModalSucesso = function(closeCallback, dismissCallback, tamanho, param){
		var defaultParam = {'titulo': 'Sucesso', 'tipoMensagem':MODAL.SUCESSO , 'mensagem': Mensagens.geral.sucesso.PROCESSAMENTO};
        return _criarModalPersonalizado('formularios/tpl_modal_sucesso.html',controllerDefault, closeCallback, dismissCallback, tamanho, _mesclarParam(defaultParam, param));
    };

	var _criarModalRedirecionamento = function(closeCallback, dismissCallback, tamanho, param){
		var defaultParam = {'titulo': 'Aviso de Redirecionamento', 'tipoMensagem':MODAL.REDIRECIONAR , 'mensagem': Mensagens.geral.sucesso.REDIRECIONAMENTO};
        return _criarModalPersonalizado('formularios/tpl_modal_redirecionamento.html',controllerDefault, closeCallback, dismissCallback, tamanho, _mesclarParam(defaultParam, param));
    };

	var _mesclarParam = function(base, novo){
		if(novo && typeof novo === 'object'){
			var param = angular.copy(novo);
			_resolverMensagem(param);
			for(var prop in base){
				if(param[prop] === undefined)
					param[prop] = base[prop];
			}
			return param;
		}else{
			return base;
		}
	};

	var _resolverMensagem = function(novo) {
		if (novo.mensagem) {
			novo.mensagem = mensagensAPI.montarMensagemParaExibicao(novo.mensagem, novo.parametros);
		}
	}; 

    return{
        criarModalPersonalizado : _criarModalPersonalizado,
        criarModalConfirmar : _criarModalConfirmar,
        criarModalRemocao : _criarModalRemocao,
        criarModalErro : _criarModalErro,
		criarModalAlerta : _criarModalAlerta,
        criarModalSucesso : _criarModalSucesso,
		criarModalRedirecionamento : _criarModalRedirecionamento
    };

});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Servico exclusivo para mensagem de loading
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

app.factory("modalCarregamentoAPI", function($q, $http, $uibModal, $log, $interval, MODAL){
	// Variaveis utilizadas somente para o caso de um modal de carregamento ser aberto
	var modalCarregamento;

	var _criarModalCarregamento = function(){
		$log.debug("Abrindo modal de carregamento");

		// Instanciar modal
		modalCarregamento = $uibModal.open({
			templateUrl: 'formularios/tpl_modal_loading.html',
			controller: 'DefaultModalController',
			backdrop: 'static',
			size: 'sm',
			animation: false,
			resolve: {
				param: function () {
					return {};
				}
			}
		});
		
    };
	
	var _fecharModalCarregamento = function(){
		$log.debug("Fechando modal de carregamento");
		
        if(!modalCarregamento){
			$log.error("Nao e possivel fechar o modal de carregamento pois ele nao esta aberto.");
		}else{
			$q.all([modalCarregamento.opened, modalCarregamento.rendered]).then(
				function sucesso(result){
					$log.debug("Realizando fechamento do modal de carregamento");
					modalCarregamento.close();
				},
				function error(reason){
					$log.error(reason);
				}
			).finally(function(){
				$log.debug("Resetando 'modalCarregamento' para undefined");
				modalCarregamento = undefined;
			}, angular.noop);
		}
    };


	return{
		criarModalCarregamento : _criarModalCarregamento,
		fecharModalCarregamento : _fecharModalCarregamento
    };

});
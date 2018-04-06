/**
 * Declaracao do Modulo principal da aplicacao. A partir deste modulo devem ser criados
 * todos os controllers, diretivas e servicos Angular para a aplicacao. Ao empacotar
 * os arquivos com o Grunt, um arquivo unico com todo o codigo do angular sera criado.
 * 
 * @author felipe.leao
 */

var app = angular.module('app', ['ui.bootstrap', 'ngAnimate', 'ngSanitize', 'timer', 'angularMoment', 'angularjs-dropdown-multiselect']);


// app.constant("MODAL", {
// 	"CONFIRMAR": "CONFIRMAR",
// 	"REMOVER": "REMOVER",
// 	"ALERTA": "ALERTA",
// 	"ERRO": "ERRO",
// 	"SUCESSO": "SUCESSO",
// 	"ADICIONAR": "ADICIONAR",
// 	"EDITAR": "EDITAR",
// 	"REDIRECIONAR": "REDIRECIONAR"
// });

// app.constant("VALIDACAO", {
// 	"PREENCHIDO": "PREENCHIDO",
// 	"NAO_PREENCHIDO": "NAO_PREENCHIDO",
// 	"INCOMPLETO": "INCOMPLETO"
// });

app.run(['amMoment', function(amMoment){
	amMoment.changeLocale('pt-br');
}]);

/**
 * Chamada de funcao para configuracao de parametreos iniciais utilizados pelo Angular, 
 * como variaveis globias acessadas por servicos.
 */
app.config(['$httpProvider', '$logProvider', '$injector', function ($httpProvider, $logProvider, $injector) {

	// Habilitar/Desabilitar nivel de Debug do log do AngularJS
	$logProvider.debugEnabled(true);

	// Recuperar token CSRF e configurar o servico $http para utiliza-lo no HEADER de requisicoes.
	// var token = document.getElementById('csrf-token').value;
	// var header = document.getElementById('csrf-headerName').value;
	// $httpProvider.defaults.headers.common[header] = token;
	// $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';

	// Registrar interceptors.
	// $httpProvider.interceptors.push('tratamentoPostInterceptor');
	// $httpProvider.interceptors.push('tratamentoGetInterceptor');

	// Ajustes de compatibilidade para IE e browsers antigos
	if (!String.prototype.repeat) {
		console.log('Não encontrou o método repeat!');
		String.prototype.repeat = function (times) {
			var result = '';
			for (var i = 0; i < times; i++) {
				result = result + this;
			}
			return result;
		};
	}

	if (!Array.prototype.find) {
		console.log('Não encontrou o método find!');
		Array.prototype.find = function (callback) {
			for (var i = 0; i < this.length; i++) {
				if (callback(this[i], i)) {
					return this[i];
				}
			}
			return null;
		};
	}

	if (!Array.prototype.findIndex) {
		console.log('Não encontrou o método findIndex!');
		Array.prototype.findIndex = function (callback) {
			var result = this.find(callback);
			if (!result)
				return -1;
			return this.indexOf(result);
		};
	}

}]);

/**
 * Controller Angular para o formulario de confirmacao de presenca.
 * 
 * @author felipe.leao
 */
app.controller('FormularioPresencaController', ['$scope', '$log', 'formularioPresencaAPI', function ($scope, $log, formularioPresencaAPI) {

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
        formularioPresencaAPI.enviarConfirmacao($scope.formulario);
    };

}]);



/**
 * Controller Angular para a pagina inicial.
 * 
 * @author felipe.leao
 */
app.controller('LandingController', ['$scope', '$log', '$timeout', 'moment', function ($scope, $log, $timeout, moment) {

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

    



}]);



/**
 * API de servico para atender a pagina de confirmacao de presenca.
 * 
 * @author felipeleao
 */
app.factory("formularioPresencaAPI", ['$http', '$log', function ($http, $log) {

    var _enviarConfirmacao = function (formulario) {
        $log.debug("Invocando o envio de confirmacao.");
		return $http.post("confirmar.php", formulario);
    };


    return {
        enviarConfirmacao: _enviarConfirmacao
    };
}]);

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

/**
 * Servico para auxiliar com a criacao e exibicao de modais pela aplicação
 * 
 * @author felipe.leao
 */
app.factory("modalAPI", ['$uibModal', '$log', '$interval', 'MODAL', 'mensagensAPI', function($uibModal, $log, $interval, MODAL, mensagensAPI){
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

}]);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Servico exclusivo para mensagem de loading
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

app.factory("modalCarregamentoAPI", ['$q', '$http', '$uibModal', '$log', '$interval', 'MODAL', function($q, $http, $uibModal, $log, $interval, MODAL){
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

}]);

app.factory("urlAPI", function () {

    var _recuperarValorDoParametroNomeado = function (param) {
        var params = window.location.search.split(/[\?|\&|\=]/);
        var i = 0;
        while (i < params.length && params[i] !== param) i++;
        return params && params.length > i + 1 ? params[i + 1] : null;
    };

    var _recuperarValorParametroPosicional = function (numberOfParams) {
        var params = window.location.pathname.split(/\//);

        if (params.length < numberOfParams)
            return null;

        return params.filter(function(element, index) {
            return index >= (params.length - numberOfParams);
        });

    };

    return {
        recuperarValorDoParametroNomeado: _recuperarValorDoParametroNomeado,
        recuperarValorParametroPosicional: _recuperarValorParametroPosicional
    };
});

app.factory("utilAPI", ['$http', '$filter', '$log', function($http, $filter, $log){
	var utilAPI = this;

	utilAPI._listarEstados = function(){
		return $http.get('util/estados');
	};

	utilAPI._recuperarEstado = function(sigla){
		return $http.get('util/estado/'+sigla);
	};

	utilAPI._listarEstruturaOrganizacionalTree = function(){
		return $http.get('util/hierarquiaAreasTree/');
	};

	utilAPI._recuperarObjetoDeErros = function(response){
		var erros = {};
		if(response && response.data && response.data.objetos && response.data.objetos.erros){
			var errosRecebidos = response.data.objetos.erros;
			for(var idx in errosRecebidos){
				erros[errosRecebidos[idx].field] = errosRecebidos[idx].msg;
			}
		}
		return erros;
	};

	utilAPI._onbeforeunload = function(event, existeAlgumaAlteracaoNaoSalva) {
		return function (event) { 
			if(existeAlgumaAlteracaoNaoSalva()){
				var message = 'Tem certeza que deseja abandonar a pagina sem gravar os dados? ';
				if (typeof event == 'undefined') {
					event = window.event;
				}
				if (event) {
					event.returnValue = message;
				}
				return message;
			}
		};
	};

	/**
     * Metodo recursivo para iterar o array de areas com base em m SCR e retornar uma string que 
     * represente todo o caminho de areas ate a area do projeto.
     * 
     * @param {*} scr - O  SCR a ser buscado no array de areas
     * @return {String} caminho completo da raiz da arvore de areas ate a area alvo.
     */
    utilAPI._montarArea = function(scr, hierarquiaAreas){
        var area = $filter('filter')(hierarquiaAreas, {id:scr})[0];
        return utilAPI.buscarAreaParent(area.parent, hierarquiaAreas) + area.text;
    };

    utilAPI.buscarAreaParent = function(scrParent, hierarquiaAreas){
        if(scrParent === "#")
            return "";

        var areaParent = $filter('filter')(hierarquiaAreas, {id:scrParent})[0];
        return utilAPI.buscarAreaParent(areaParent.parent, hierarquiaAreas) + areaParent.sigla + " / ";
	};
	
	/**
	 * O metodo analisa se o SCR recebido eh relativo a uma sub area do scrParent, independente do subnivel.
	 * Se o SCR for igual ao scrParent o metodo retornara falso, pois nao eh uma subarea.
	 * 
	 * @param {String} scr 
	 * @param {String} scrParent 
	 * @param {Object[]} scrParent 
	 */
	utilAPI._isSubAreaOf = function(scr, scrParent, hierarquiaAreas){
		if(scr === scrParent) 
			return false;

		while(scr && scr !== "#"){
			var area = $filter('filter')(hierarquiaAreas, {id:scr})[0];
			
			if(area.parent === scrParent){
				return true;
			}else{
				scr = area.parent;
			}
		}

		return false;
	};





	return {
		listarEstados : utilAPI._listarEstados,
		recuperarEstado : utilAPI._recuperarEstado,
		listarEstruturaOrganizacionalTree : utilAPI._listarEstruturaOrganizacionalTree,
		recuperarObjetoDeErros : utilAPI._recuperarObjetoDeErros,
		onbeforeunload : utilAPI._onbeforeunload,
		montarArea : utilAPI._montarArea,
		isSubAreaOf : utilAPI._isSubAreaOf
	};
    
}]);
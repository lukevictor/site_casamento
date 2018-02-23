app.factory("utilAPI", function($http, $filter, $log){
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
    
});
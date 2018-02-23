/**
 * Controller Angular para a pagina Projeto
 * 
 * @author felipe.leao
 */
simulador.controller('ProjetoController', function ($scope, $log, $filter, modalAPI, utilAPI) {

    // Instanciacao de variaveis enviadas pelo back-end
    $scope.hierarquiaAreas = [{ scr: 0, nome: "Carregando...", sigla: "-", nivel: 1 }];
    $scope.projetos = [];
    $scope.projetosFiltrados = [];

    // Outras variaveis de escopo
    $scope.loading = true;
    $scope.filtro = {
        primeiroNivel: '',
        segundoNivel: '',
        terceiroNivel: '',
        quartoNivel: ''
    };
    $scope.filtroAplicado = {"scrResponsavel" : ''};
    
    // Copiar valores originais dos formularios
    var _filtroInicial = angular.copy($scope.filtro);
    var _filtroAplicadoInicial = angular.copy($scope.filtroAplicado);

    /**
     * Metodo de inicializacao da pagina, responsavel por carregar os sumarios dos projetos
     */
    var _init = function(){
		projetoAPI.carregarTodosProjetos().then(
			function successCallback(response){
                $scope.projetos = response.data.objetos.lista;
                $scope.projetosFiltrados = $scope.projetos;
				$scope.loading = false;
			}, function errorCallback(response){
				$log.error("Erro ao recuperar projetos.");
				$scope.loading = false;
				modalAPI.criarModalErro();
			}
        );
        
        utilAPI.listarEstruturaOrganizacionalTree().then(
            function sucesso(response) {
                $scope.hierarquiaAreas = response.data.objetos.areasTree;
            }, function erro(response) {
                $log.error("Erro ao carregar estrutura organizacional.");
                $scope.hierarquiaAreas = [{ scr: 0, nome: "Erro ao carregar estrutura de areas", sigla: "XXX", nivel: 1 }];
            }
        );
    };
    
    $scope.montarArea = function(scrArea){return utilAPI.montarArea(scrArea, $scope.hierarquiaAreas);};

    ////////////////////////////////////////
	// Metodos para filtragem da pagina
    ////////////////////////////////////////
    $scope.filtrarSubAreas = function(scrPai){
        $log.debug("Filtrando: "+scrPai);
        return $filter('filter')($scope.hierarquiaAreas, {parent:scrPai});
    };

    $scope.atualizarSegundoNivel = function(){
        $scope.areasSegundoNivel = ($scope.filtro.primeiroNivel && $scope.filtro.primeiroNivel !== "") ? $scope.filtrarSubAreas($scope.filtro.primeiroNivel.id) : null;
    };

    $scope.atualizarTerceiroNivel = function(){
        $scope.areasTerceiroNivel = ($scope.filtro.segundoNivel && $scope.filtro.segundoNivel !== "") ? $scope.filtrarSubAreas($scope.filtro.segundoNivel.id) : null;
    };

    $scope.atualizarQuartoNivel = function(){
        $scope.areasQuartoNivel = ($scope.filtro.terceiroNivel && $scope.filtro.terceiroNivel !== "") ? $scope.filtrarSubAreas($scope.filtro.terceiroNivel.id) : null;
    };
    
    $scope.resetFiltro = function(){
        $scope.filtro = angular.copy(_filtroInicial);
        $scope.filtroAplicado = angular.copy(_filtroAplicadoInicial);
        $scope.atualizarSegundoNivel();
        $scope.atualizarTerceiroNivel();
        $scope.atualizarQuartoNivel();
        $scope.filtroForm.$setPristine();
        $scope.projetosFiltrados = $scope.projetos;
    };
    
    $scope.isFiltroChanged = function(){
      return !angular.equals($scope.filtro, _filtroInicial);
    };

    $scope.filtrarProjetos = function(){
        if(typeof $scope.filtro.quartoNivel === 'object')
            $scope.filtroAplicado.scrResponsavel = $scope.filtro.quartoNivel.id;
        else if(typeof $scope.filtro.terceiroNivel === 'object')
            $scope.filtroAplicado.scrResponsavel = $scope.filtro.terceiroNivel.id;
        else if(typeof $scope.filtro.segundoNivel === 'object')
            $scope.filtroAplicado.scrResponsavel = $scope.filtro.segundoNivel.id;
        else if(typeof $scope.filtro.primeiroNivel === 'object')
            $scope.filtroAplicado.scrResponsavel = $scope.filtro.primeiroNivel.id;

        $scope.projetosFiltrados = $filter("filter")($scope.projetos, function(value, index, array){
            var scrResponsavel = value.scrResponsavel.toString();
            var scrFiltro = $scope.filtroAplicado.scrResponsavel;
            return scrResponsavel === scrFiltro || utilAPI.isSubAreaOf(scrResponsavel, scrFiltro, $scope.hierarquiaAreas);
        });
    };


    _init();

});


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

app.run(function(amMoment){
	amMoment.changeLocale('pt-br');
});

/**
 * Chamada de funcao para configuracao de parametreos iniciais utilizados pelo Angular, 
 * como variaveis globias acessadas por servicos.
 */
app.config(function ($httpProvider, $logProvider, $injector) {

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

});
/**
 * Arquivo de configuracaoo das tasks a serem executadas pelo Grunt no projeto.
 */
module.exports = function(grunt) {

	// Configuracao do projeto
	grunt.initConfig({
		app: {
                source: 'src/assets',
				dist: 'assets',
                views: 'src/views',
                templates: 'template/'
            },
            
		// Plugin para validar todos os scripts javascript antes de passar pelo 'uglify' (ignora os .min.js)
		jshint : {
			options : {
				ignores : [ 
                    '<%= app.source %>/_js/css-js-fixes/*.js',
                    '<%= app.source %>/_js/build/*.js'
				 ]
			},
			all : [ 'Gruntfile.js', '<%= app.source %>/_js/**/*.js' ]
		},

		// Concatenar todos os arquivos de scripts do angular em um so arquivo.
		concat: {
			options: {
				separator: '\n\n',
			},
			dist: {
				src: [
					'<%= app.source %>/_js/app.mod.js',
					'<%= app.source %>/_js/controllers/**/*.js',
					'<%= app.source %>/_js/directives/**/*.js',
					'<%= app.source %>/_js/services/**/*.js',
					'<%= app.source %>/_js/interceptors/**/*.js',
					'<%= app.source %>/_js/filters/**/*.js'
				],
				dest: '<%= app.source %>/_js/build/app.js',
			},
		},

		

		// Anota os scripts do Angular, garantindo que a minificacao nao impossibilite a injecao de dependencias
		ngAnnotate: {
			options:{
				singleQuotes: true
			},
			app: {
				files: [{
					expand: true,
					src: ['<%= app.source %>/_js/build/app.js'],
					dest: '.',
					ext: '.annotated.js',
					extDot: 'last'
				}]
			}
		},

		// Minifica os arquivos JS compilando-os em arquivos unicos
		uglify : {
			options : {
				// permite que nomes de metodos e variaveis sejam trocadas para diminuir o tamanho
				mangle : true
			},

			compilar_e_minificar : {
				files : {
					// Outros Scripts Gerais
					//'<%= app.dist %>/js/mensagens.min.js' : [ '<%= app.source %>/_js/mensagens.js' ],
					// Script Angular com todas os Controllers, Services, Directives, filters e interceptors da aplicação.
					'<%= app.dist %>/js/app.min.js' : [ '<%= app.source %>/_js/build/app.annotated.js' ]
				}
			}
		},

		// Plugin para compilar todos os arquivos '.sass' em arquivos CSS, minificando-os.
		sass : {
			compilar_e_minificar : {
				options : {
					style : 'compressed'
				},
				files : {
                    '<%= app.dist %>/css/main.min.css' : '<%= app.source %>/_sass/main.scss',
                    '<%= app.dist %>/css/landing.min.css' : '<%= app.source %>/_sass/landing.scss'
				}
			}
		},

		//Copiar assets extras que não necessitam de processamento.
		copy: {
			css: {
				files: [{
					expand: true,
					cwd: '<%= app.source %>/_css/',
					src: ['**'],
					dest: '<%= app.dist %>/css/',
					filter: 'isFile'
				}]
			},
			js: {
				files: [{
					expand: true,
					cwd: '<%= app.source %>/_js/css-js-fixes/',
					src: ['**'],
					dest: '<%= app.dist %>/js/css-js-fixes/',
					filter: 'isFile'
				}]
			},
			angular_app_full: {
				files: [{
					expand: true,
					cwd: '<%= app.source %>/_js/build/',
					src: ['app.annotated.js'],
					dest: '<%= app.dist %>/js/',
					filter: 'isFile'
				}]
			}
		},
		
		// Plugin cache busting. Altera o nome de assets e referencias a eles com o objetivo de evitar o cache de arquivos antigos
		cachebreaker: {
			dev: {
				options: {
					match: [
						{   // Pattern    // File to hash 
							'app.annotated.js': '<%= app.dist %>/js/app.annotated.js',
							'app.min.js': '<%= app.dist %>/js/app.min.js',
							//'mensagens.min.js': '<%= app.dist %>/js/mensagens.min.js',
                            'main.min.css': '<%= app.dist %>/css/main.min.css',
                            'landing.min.css': '<%= app.dist %>/css/landing.min.css'
						}
					],
					replacement: 'md5'
				},
				files: {
					src: [
                        '<%= app.templates %>/header.tpl.php',
                        '<%= app.templates %>/footer.tpl.php'
					]
				}
			}
		}
		

	});

	// Carregamento dos Plugins do Grunt
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-ng-annotate');
	grunt.loadNpmTasks('grunt-cache-breaker');

	// Tarefas que serão executadas
	grunt.registerTask('default', ['jshint', 'concat', 'ngAnnotate', 'uglify', 'sass', 'copy', 'cachebreaker']);

};
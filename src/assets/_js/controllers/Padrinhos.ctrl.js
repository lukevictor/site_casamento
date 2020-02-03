/**
 * Controller Angular para a pagina de padrinhos.
 * 
 * @author lucas.victor
 */
app.controller('PadrinhosController', function ($scope, $log) {

    $scope.casais = [
        {
            padrinho: { nome: "Daniel", foto: "Daniel.jpg" },
            madrinha: { nome: "Salete", foto: "Salete.jpg" }
        },
        {
            padrinho: { nome: "Douglas", foto: "Douglas.jpg" },
            madrinha: { nome: "Thayná", foto: "Thayná.jpg" }
        },
        {
            padrinho: { nome: "Luciano", foto: "Luciano.jpg" },
            madrinha: { nome: "Sheila", foto: "Sheila.jpg" }
        },
        {
            padrinho: { nome: "Ricardo", foto: "Ricardo.jpg" },
            madrinha: { nome: "Jéssica", foto: "Jéssica.jpg" }
        },
        {
            padrinho: { nome: "Cleyton", foto: "Cleyton.jpg" },
            madrinha: { nome: "Driele", foto: "Driele.jpg" }
        },
        {
            padrinho: { nome: "Toninho", foto: "Toninho.jpg" },
            madrinha: { nome: "Zélia", foto: "Zélia.jpg" }
        },
        {
            padrinho: { nome: "Diogo", foto: "Diogo.jpg" },
            madrinha: { nome: "Thais", foto: "Thais.jpg" }
        },
        {
            padrinho: { nome: "Bruno", foto: "Bruno.jpg" },
            madrinha: { nome: "Aline", foto: "Aline.jpg" }
        },
        {
            padrinho: { nome: "Ivan", foto: "Ivan.jpg" },
            madrinha: { nome: "Ana", foto: "Ana.jpg" }
        }
    ];

    /**
     * Metodo de inicializacao do formulario
     */
    $scope.init = function () {
        shuffleArray($scope.casais);
    };

    var shuffleArray = function (array) {
        var m = array.length, t, i;

        // While there remain elements to shuffle
        while (m) {
            // Pick a remaining element…
            i = Math.floor(Math.random() * m--);

            // And swap it with the current element.
            t = array[m];
            array[m] = array[i];
            array[i] = t;
        }

        return array;
    };


});


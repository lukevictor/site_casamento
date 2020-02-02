/**
 * Controller Angular para a pagina de padrinhos.
 * 
 * @author lucas.victor
 */
app.controller('PadrinhosController', function ($scope, $log) {

    $scope.casais = [
        {
            padrinho: { nome: "Renan", foto: "Renan.jpg" },
            madrinha: { nome: "Luciana", foto: "Luciana.jpg" }
        },
        {
            padrinho: { nome: "Alexandre", foto: "Douglas.jpg" },
            madrinha: { nome: "Andrea", foto: "Andrea.PNG" }
        },
        {
            padrinho: { nome: "Vinicius", foto: "Vinicius.PNG" },
            madrinha: { nome: "Juliana", foto: "Juliana_Prima.jpg" }
        },
        {
            padrinho: { nome: "André", foto: "Andre.PNG" },
            madrinha: { nome: "Thayna", foto: "Thayna.jpg" }
        },
        {
            padrinho: { nome: "Ernesto", foto: "Ernesto.PNG" },
            madrinha: { nome: "Surama", foto: "Surama.jpg" }
        },
        {
            padrinho: { nome: "Euries", foto: "Euries.jpg" },
            madrinha: { nome: "Inês", foto: "Ines_2.PNG" }
        },
        {
            padrinho: { nome: "Bruno", foto: "Bruno.jpg" },
            madrinha: { nome: "Raquel", foto: "Raquel.jpg" }
        },
        {
            padrinho: { nome: "Danilo", foto: "Danilo_4.PNG" },
            madrinha: { nome: "Juliana", foto: "Juliana_Faculdade.PNG" }
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


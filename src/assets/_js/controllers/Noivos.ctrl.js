/**
 * Controller Angular para a pagina de Noivos.
 * 
 * @author lucas.victor
 */
app.controller('NoivosController', function ($scope, $log) {

    $scope.galeria = [
        {src: "../assets/images/opt/ensaio/C_F_PreWedding-0020.jpg", largo: true},
        {src: "../assets/images/opt/ensaio/C_F_PreWedding-0032.jpg"},
        {src: "../assets/images/opt/ensaio/C_F_PreWedding-0035.jpg"},
        {src: "../assets/images/opt/ensaio/C_F_PreWedding-0043.jpg"},
        {src: "../assets/images/opt/ensaio/C_F_PreWedding-0044.jpg"},
        {src: "../assets/images/opt/ensaio/C_F_PreWedding-0062.jpg"},
        {src: "../assets/images/opt/ensaio/C_F_PreWedding-0092.jpg", largo: true},
    ];

    /**
     * Metodo de inicializacao
     */
    $scope.init = function () {
        
    };

});

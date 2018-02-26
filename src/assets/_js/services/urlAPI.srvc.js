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
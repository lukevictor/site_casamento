app.directive('fotoGaleria', function() {
    
    t =  '<div class="col-sm-12 col-xs-12 gal-item" ng-class="item.largo ? \'col-md-8\' : \'col-md-4\' ">';
    t += '    <div class="box">';
    t += '        <a href="#" data-toggle="modal" data-target="{{\'#\'+index}}">';
    t += '            <img src="{{item.src}}">';
    t += '        </a>';
    t += '        <div class="modal fade" id="{{index}}" tabindex="-1" role="dialog">';
    t += '            <div class="modal-dialog" role="document">';
    t += '                <div class="modal-content">';
    t += '                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    t += '                        <span aria-hidden="true">×</span>';
    t += '                    </button>';
    t += '                    <div class="modal-body">';
    t += '                        <img src="{{item.src}}">';
    t += '                    </div>';
    t += '                    <div ng-if="item.descricao" class="col-md-12 description">';
    t += '                        <h4>{{item.descricao}}</h4>';
    t += '                   </div>';
    t += '                </div>';
    t += '            </div>';
    t += '        </div>';
    t += '    </div>';
    t += '</div>';


    return {
        restrict: 'AE',
        scope: {
            item: '=',
            index: "@"
        },
        replace: true,
        template: t
    };
});
<?php include_once("../src/config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-controller="FormularioPresencaController" ng-init="init()" ng-cloak >
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

        <div class="topo confirmacao"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Confirma&ccedil;&atilde;o de Presen&ccedil;a <small>/RSVP</small></h1>
                </div>
            </div>

            


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <section>
                        <p>Para que possamos organizar o evento da melhor forma possível, pedimos que
                            todos os convidados nos informem com antecedência se poderão comparecer
                            ou não.</p>
                        <p>Por favor, preencha o formulário abaixo com a sinalização positiva ou negativa
                            sobre seu comparecimento. É possível realizar a confirmação para múltiplas
                            pessoas de uma só vez listando-as como acompanhantes. Ao preencher, não
                            esqueça de colocar NOME e SOBRENOME.</p>
                    </section>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/opt/bullet.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>
            
            <div class="row form-presenca">
                
                <!-- FORMULARIO -->
                <div class="col-md-8 col-md-offset-2 well" ng-hide="loading || exibirMensagemSucesso || exibirMensagemErro">
                    <form class="form-horizontal" novalidate>
                        <div class="form-group form-group-lg" ng-class="{'has-error' : erros.convidado}">
                            <label for="convidado" class="col-sm-3 control-label">Convidado</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="convidado-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                    <input type="text" class="form-control" id="convidado" ng-model="formulario.convidado" autocomplete='name'>
                                </div>
                                <span class="help-block" ng-show="erros.convidado" ng-bind-html="erros.convidado"></span>
                            </div>
                        </div>
                        <div class="form-group form-group-lg" ng-class="{'has-error' : erros.email}">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="convidado-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                    <input type="email" class="form-control" id="email" ng-model="formulario.email" autocomplete='email'>
                                </div>
                                <span class="help-block" ng-show="erros.email" ng-bind-html="erros.email"></span>
                            </div>
                        </div>
                        <div class="btn-group centralizado form-group wrapper" ng-class="{'has-error' : erros.comparecimento}">
                            <label for="sim" class="btn btn-radio btn-default" ng-class="{'active': formulario.comparecimento == 'sim'}">
                                <input type="radio" name="comparecimento" value="sim" ng-model="formulario.comparecimento" id="sim" autocomplete="off"><span class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;SIM, comparecerei!</span>
                            </label>
                            <label for="nao" class="btn btn-radio btn-default" ng-class="{'active': formulario.comparecimento == 'nao'}">
                                <input type="radio" name="comparecimento" value="nao" ng-model="formulario.comparecimento" id="nao" autocomplete="off"><span class="text-danger"><span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>&nbsp;NÃO poderei ir</span>
                            </label>
                        </div>
                        <div class="form-group" ng-class="{'has-error' : erros.comparecimento}" style="text-align:center;"><span class="help-block" ng-show="erros.comparecimento" ng-bind-html="erros.comparecimento"></span></div>
                        <hr ng-hide="formulario.comparecimento == 'nao'" />
                        <div class="row acompanhantes" ng-hide="formulario.comparecimento == 'nao'">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Acompanhantes Confirmados</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group" ng-repeat="ac in formulario.acompanhantes | orderBy:ordem">
                                            <label  class="col-sm-4 control-label">Nome e sobrenome</label>
                                            <div class="col-sm-8">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" ng-model="ac.nome" autocomplete='off'>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-danger" type="button" ng-click="removerAcompanhante(ac)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" style="text-align:center;">
                                                <a href="#" class="btn btn-default btn-xs" onclick="return false;" ng-click="adicionarAcompanhante()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Adicionar novo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group submit">
                            <div class="col-sm-12" >
                                <button type="submit" class="btn btn-default btn-lg "
                                    vc-recaptcha
                                    key="recaptcha.key"
                                    on-create="setWidgetId(widgetId)"
                                    on-success="setResponse(response)"
                                    on-expire="cbExpiration()">Enviar Resposta</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /FORMULARIO -->

                <!-- LOADING -->
                <div class="col-md-8 col-md-offset-2 well" ng-show="loading">
                    <h2 style="text-align:center;"><i class="fas fa-spinner fa-fw fa-spin"></i>&nbsp;&nbsp;Enviando...</h2>
                </div>
                <!-- /LOADING -->

                <!-- MENSAGEM -->
                <div class="col-md-8 col-md-offset-2 well well-success" ng-show="exibirMensagemSucesso">
                    <h2 class="text-success"><i class="fas fa-check fa-fw"></i>Confirmação enviada!</h2>
                    <section>
                        <p><strong>Sua presença foi confirmada, obrigado! <i class="far fa-smile text-success"></i></strong></p>
                        <p>Aguardamos ansiosamente a sua presença.</p>
                    </section>
                </div>
                <div class="col-md-8 col-md-offset-2 well well-danger" ng-show="exibirMensagemErro">
                    <h2 class="text-danger"><i class="fas fa-times fa-fw"></i>Erro ao confirmar</h2>
                    <section>
                        <p><strong>Prensença não confirmada <i class="far fa-frown text-danger"></i></strong></p>
                        <p>Aconteceu algo de errado enquanto confirmávamos sua presença. Por favor, tente novamente mais tarde ou entre em contato diretamente conosco.</p>
                    </section>
                </div>
                <!-- /MENSAGEM -->
                
            </div>


            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>

		 </div> <!-- /container -->

		<div id="push"></div>
	</div>


	<?php
		include_once("../template/footer.tpl.php");
		include_once("../template/javascript.tpl.php");
    ?>

</body>
</html>


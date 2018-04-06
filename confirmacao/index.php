<?php include_once("../config/constants.php"); ?>
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
                        <p>Para que possamos organizar organizar o evento da melhor forma possível, pedimos que todos os convidados nos informem com antecedência se poderão comparecer ou não.</p>
                        <!-- <p>Alguns moram muito longe, até mesmo em outras cidades ou estados, ou tem compromissos pessoais/profissionais inadiáveis que simplesmente tornam impossível estar presente conosco para celebrar nossa união. Por mais que desejemos verdadeiramente a presença de todos nossos convidados, somos capazes de compreender eventuais ausências. Entretanto, pedimos que nos informem sinceramente sobre a perspectiva de comparecerem. Isto é de extrema importância para que possamos proporcionar o conforto e qualidade de serviço do qual acreditamos que nossos amigos e parentes sejam merecedores.</p> -->
                        <p>Por favor, preencha o formulário abaixo com a sinalização positiva ou negativa sobre seu comparecimento. É possível realizar a confirmação para múltiplas pessoas de uma só vez listando-as como acompanhantes.</p>
                    </section>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/bullet.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>

            <div class="row form-presenca">
                <div class="col-md-8 col-md-offset-2 well">
                    <form class="form-horizontal" no-validate>
                        <div class="form-group form-group-lg">
                            <label for="convidado" class="col-sm-3 control-label">Convidado</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="convidado-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                    <input type="text" class="form-control" id="convidado" ng-model="formulario.convidado" autocomplete='name'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <label for="email" class="col-sm-3 control-label">Email de Contato</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="convidado-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                    <input type="email" class="form-control" id="email" ng-model="formulario.email" autocomplete='email'>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group centralizado">
                            <label for="sim" class="btn btn-radio btn-default" ng-class="{'active': formulario.comparecimento == 'sim'}">
                                <input type="radio" name="comparecimento" value="sim" ng-model="formulario.comparecimento" id="sim" autocomplete="off"><span class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;SIM, comparecerei!</span>
                            </label>
                            <label for="nao" class="btn btn-radio btn-default" ng-class="{'active': formulario.comparecimento == 'nao'}">
                                <input type="radio" name="comparecimento" value="nao" ng-model="formulario.comparecimento" id="nao" autocomplete="off"><span class="text-danger"><span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>&nbsp;NÃO poderei ir</span>
                            </label>
                        </div>
                        <hr ng-hide="formulario.comparecimento == 'nao'" />
                        <div class="row acompanhantes" ng-hide="formulario.comparecimento == 'nao'">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Acompanhantes</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group" ng-repeat="ac in formulario.acompanhantes | orderBy:ordem">
                                            <label  class="col-sm-2 control-label">Nome</label>
                                            <div class="col-sm-10">
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
                                <button type="submit" ng-click="enviar()" class="btn btn-success btn-lg">Enviar Confirma&ccedil;&atilde;o</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/double_arrow.png" alt="Separador" class="img-responsive center separador">
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


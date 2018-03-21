<?php include_once("../config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak>
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

         <div class="topo presentes"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Lista de Presentes <small>/Opções para nos mimar</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Para aqueles que quiserem nos mimar um pouco (:p) selecionados algumas lojas e criamos listas de presentes. Se preferir é possível ir diretamente à alguma unidade física das lojas que listamos abaixo e visualizar lá mesmo a listagem dos itens que selecionamos.</p>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>
            

            <div class="row card-loja">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="../assets/images/Fast-Shop-Logo.jpg" class="img-responsive center" />
                </div>
                <div class="col-md-8">
                    <h1>Fast Shop</h1>
                    <p>Loja de eletrônicos</p>
                    <p><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<a href="#">Link direto para a lista</a></p>
                </div>
            </div>

            <div class="row card-loja">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="../assets/images/Etna-Logo.png" class="img-responsive center" />
                </div>
                <div class="col-md-8">
                    <h1>Etna</h1>
                    <p>Loja móveis utensílios e decoração</p>
                    <p><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<a href="#">Link direto para a lista</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>

             <div class="row">
                <div class="col-md-12">
                    <h1>Outras Opções <small>/Caso você prefira</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Atendendo à solicitações de algumas pessoas, optamos por disponibilizar também nossas contas correntes para os que preferirem nos presentear em dinheiro.</p>
                    </section>
                </div>
            </div>
            <!-- Inserir cards simples, um ao lado do outro, somente com as informações das contas do BB, Caixa e Inter -->

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


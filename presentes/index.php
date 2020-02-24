<?php include_once("../src/config/constants.php"); ?>
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
                    <h1>Lista de Presentes <small>/Op&ccedil;ões para nos mimar</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Para aqueles que quiserem nos mimar um pouco selecionamos algumas lojas e criamos listas de presentes com itens para montarmos nosso novo lar.</p>
                        <p>Caso n&atilde;o se sinta confort&aacute;vel em realizar compras/pagamentos pela internet, é possível ir diretamente à alguma unidade física das lojas que listamos abaixo e visualizar lá mesmo a listagem dos itens que selecionamos.</p>
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
            

            <div class="row card-loja">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <!-- <img src="../assets/images/opt/Fast-Shop-Logo.jpg" class="img-responsive center" /> -->
                    <img src="../assets/images/opt/logo_pontofrio.png" class="img-responsive center" />
                </div>
                <div class="col-md-8">
                    <h1>Ponto Frio</h1>
                    <p>Loja de eletrônicos e eletrodomésticos. Caso prefira uma loja física é possível encontrá-las em diversos shoppings na cidade do Rio de Janeiro.</p>
                    <p><strong>Código da lista: 848951</strong></p>
                    <p><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<a target="_blank" href="https://casamento.pontofrio.com.br/#/lista-presentes/848951">Link direto para a lista</a></p>
                </div>
            </div>

            <div class="row card-loja">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <!-- <img src="../assets/images/opt/Etna-Logo.png" class="img-responsive center" /> -->
                    <img src="../assets/images/opt/logo_camicado.png" class="img-responsive center" />
                </div>
                <div class="col-md-8">
                    <h1>Camicado</h1>
                    <p>Loja móveis utensílios domésticos, decora&ccedil;&atilde;o, etc.</p>
                    <p><strong></strong></p>
                    <p><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<a target="_blank" href="https://lic.tokstok.com.br/lic/convidados/listaPresentes.jsf?idLista=271015">Link direto para a lista</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>

             <div class="row">
                <div class="col-md-12">
                    <h1>Outras Op&ccedil;ões <small>/Caso você prefira</small></h1>
                </div>
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


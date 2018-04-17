<?php include_once("../src/config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak ng-controller="PadrinhosController" ng-init="init()">
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

         <div class="topo traje"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Traje <small>/Com que roupa eu vou?</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Vestido curto ou longo? Camisa com ou sem gravata? Calça social ou jeans? E se eu usar a mesma cor das madrinhas?</p>
                        <p>Sabemos que no Rio de Janeiro é comum ter cerimônias com os mais diversos tipos de códigos de vestimenta. Depende do lugar, horário, ambiente, religião...</p>
                        <p>Abaixo estão algumas dicas para auxiliá-los!</p>
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
            
            <div class="row detalhes">
            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Mulheres</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>Vestido curto, midi ou longo. São também opções o uso de terninho ou tailleur.</li>
                                <li>Você pode optar por uma roupa de tecido liso, com brilho ou estampado. Só pedimos a gentileza de <em>não</em> ir de <em>branco</em>, <em>pérola</em>, <em>offwhite</em>, <em>gelo</em> ou <em>nude</em>. Deixe as cores muito clarinhas para a noiva!</li>
                                <li>O uso de salto alto é opcional</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Homens</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>Terno, costume ou a combinação de calça social, blusa social, blazer e sapato. O uso de gravata é opcional.</li>
                                <li>Pedimos a gentileza de não usar camisa polo, camiseta, jeans, bermuda e calçados não sociais.</li>
                            </ul>
                        </div>
                    </div>
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


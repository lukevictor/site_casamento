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
                        <p>Vestido curto ou longo? Camisa com ou sem gravata? Calça social ou jeans?</p>
                        <p>Sabemos que existem cerimônias com os mais diversos tipos de códigos de vestimentas. Depende do lugar, horário, religião...</p>
                        <p>Abaixo estão algumas dicas para auxiliá-los!</p>
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
                                <li>Você pode optar por uma roupa de tecido liso, estampado, com ou sem brilho . Só pedimos a gentileza de <b><u>não</u></b> ir de <em>branco</em>, <em>offwhite</em> ou <em>gelo</em>. Deixe as cores muito clarinhas para a noiva!</li>
                                <li>As madrinhas usarão a cor <em>marsala</em> (<i>"vinho"</i>)</li>
                                <li>O uso de salto alto é opcional.</li>
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
                                <li>Terno, costume ou a combinação de calça social, blusa social e blazer. O uso de gravata é opcional.</li>
                                <li>Pedimos a gentileza de não usar camisa polo, camiseta, jeans, bermuda e calçados não sociais.</li>
                            </ul>
                        </div>
                    </div>
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


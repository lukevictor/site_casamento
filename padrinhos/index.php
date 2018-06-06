<?php include_once("../src/config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak ng-controller="PadrinhosController" ng-init="init()">
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

         <div class="topo padrinhos"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Padrinhos e Madrinhas <small>/Amigos queridos</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Admodum accumsan disputationi eu sit.</p>
                        <p>Atirei o pau no gatis, per gatis num morreus. Suco de cevadiss deixa as pessoas mais interessantis. Quem num gosta di mé, boa gentis num é. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!</p>
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
            

            <div class="row">
                <div ng-repeat="casal in casais" class="padrinhos">
                    <div class="col-md-3 col-xs-6 container left">
                        <div class="foto" style="background-image: url(../assets/images/opt/padrinhos/{{casal.madrinha.foto}});"></div>
                        <div class="nome">{{casal.madrinha.nome}}</div>
                    </div>
                    <div class="col-md-3 col-xs-6 container right">
                        <div class="foto" style="background-image: url(../assets/images/opt/padrinhos/{{casal.padrinho.foto}});"></div>
                        <div class="nome">{{casal.padrinho.nome}}</div>
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


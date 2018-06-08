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
                        <p>Agradecemos a vocês queridos amigos, por terem participado da nossa trajetória até aqui. Por terem vibrado conosco a cada nova conquista, por terem compartilhado diversos momentos de alegria e por enxugarem o nosso choro quando não tínhamos como seguir sozinhos.</p>
                        <p>E agora, quando uma nova fase da aventura se aproxima, torcemos para que vocês continuem presentes ao nosso lado, presenciando nossas experiências, compartilhando da nossa felicidade e nos ajudando a superar as dificuldades.</p>
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


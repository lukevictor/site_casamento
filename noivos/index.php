<?php include_once("../src/config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak>
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

        <div class="topo noivos"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Os Noivos <small>/Um pelo outro</small></h1>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <div class="frame-conjuge-wrapper">
                        <div class="frame-conjuge">
                        <h1>Felipe Leão</h1>
                            <div class="img-avatar" style="background-image: url(../assets/images/opt/felipe3.jpg);"></div>
                            <section>
                                <p>Desenvolvedor de Sistemas. Balzaquiano. Judoca. Cozinheiro gourmet. Apreciador de cervejas artesanais e vinhos. Nerd. Viciado em jogo de tabuleiro. Fiel ouvinte de podcast. Arranha um violão. Tenta surfar. Ele não fala, grita.  É inteligente, íntegro, autêntico, corajoso, organizado, sincero, teimoso, perfeccionista e criativo.</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="frame-conjuge-wrapper">
                        <div class="frame-conjuge">
                        <h1>Camilla Azevedo</h1>
                            <div class="img-avatar" style="background-image: url(../assets/images/opt/camilla.jpg);"></div>
                            <section>
                                <p>Dorminhoca, agitada, patricinha e organizada. 
                                Carinhosa mais que tudo e CDF nos estudos. 
                                Obstinada quando focada e dramanhenta quando incomodada.
                                Altruísta mais do que deveria e impiedosa quando uma causa a conquista.</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <section>
                        <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <h1>Nossa Hist&oacute;ria <small>/Como tudo come&ccedil;ou</small></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <section>
                        <p>A paquera começou, em 2008, no ambiente de trabalho. Ela, estagiária na coordenação de sua
                            Faculdade e ele, funcionário da área de TI. Passaram uma semana intensa trocando mensagens
                            por orkut, msn e gtalk. Até que, enfim, marcam de sair com uns amigos. Quando o grande dia
                            chegou, ela passou duas horas calada na mesa do barzinho de tão nervosa que estava.
                            Enquanto ele, não parou de falar se quer por um instante. Quando ela se retirou pra ir ao
                            banheiro, ele nem pensou muito e foi atrás dela no lavabo para lhe roubar um beijo. Pronto! Gamou e grudou!</p>
                        <p>Hoje estão aqui, com 10 anos de muita história pra contar: beijos, sorrisos, algumas briguinhas
                            (ninguém é perfeito rsrs), aniversários, festas, cineminhas, Netflix, viagens, muitas idas a Cabo
                            Frio, intercâmbio, graduações, mestrado, MBA, compartilham até o mesmo local de trabalho,
                            etc.</p>
                        <p>Agora o 11 de Agosto se aproxima e uma nova página dessa história começa a ser escrita e eles
                            estão cheios de expectativas, sonhos e confiantes de que tem muito mais coisas boas por vir!</p>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                    <section>
                        <img src="../assets/images/opt/brasao.png" alt="Camilla e Feliipe" class="img-responsive center">
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


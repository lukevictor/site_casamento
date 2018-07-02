<?php include_once "../src/config/constants.php";?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php
define("TEMPLATE_ESTILO", "../template/estilos_galeria.tpl.php");
include_once "../template/header.tpl.php";
?>

<body ng-app="app" ng-cloak>
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once "../template/navbar.tpl.php";?>

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
                            (ninguém é perfeito rsrs), aniversários, festas, cineminhas, Netflix, jogatinas, viagens, muitas idas a Cabo
                            Frio, intercâmbio, graduações, mestrado, MBA, compartilham até o mesmo local de trabalho,
                            etc.</p>
                        <p>Agora o 11 de Agosto se aproxima e uma nova página dessa história começa a ser escrita e eles
                            estão cheios de expectativas, sonhos e confiantes de que tem muito mais coisas boas por vir!</p>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <section>
                    <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                </section>
                <section>
                    <div class="container gal-container">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#1">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0002.jpg">
                            </a>
                            <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0002.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the first one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#2">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0003.jpg">
                            </a>
                            <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0003.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the second one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#4">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0005.jpg">
                            </a>
                            <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0005.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the fourth one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#5">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0006.jpg">
                            </a>
                            <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0006.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the fifth one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#6">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0007.jpg">
                            </a>
                            <div class="modal fade" id="6" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0007.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the sixth one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#7">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0008.jpg">
                            </a>
                            <div class="modal fade" id="7" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0008.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the seventh one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#9">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0010.jpg">
                            </a>
                            <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0010.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the ninth one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#10">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0011.jpg">
                            </a>
                            <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0011.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the tenth one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#11">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0012.jpg">
                            </a>
                            <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0012.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the leventh one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#12">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0013.jpg">
                            </a>
                            <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0013.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the 12th one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#13">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0014.jpg">
                            </a>
                            <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0014.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the 13th one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#14">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0015.jpg">
                            </a>
                            <div class="modal fade" id="14" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0015.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the 14th one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                            <a href="#" data-toggle="modal" data-target="#15">
                                <img src="../assets/images/opt/ensaio/IMG-20180701-WA0016.jpg">
                            </a>
                            <div class="modal fade" id="15" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                    <img src="../assets/images/opt/ensaio/IMG-20180701-WA0018.jpg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the 15th one on my Gallery</h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        </div>
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
include_once "../template/footer.tpl.php";
include_once "../template/javascript.tpl.php";
?>
</body>
</html>


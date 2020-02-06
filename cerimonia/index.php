<?php include_once("../src/config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak>
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

        <div class="topo cerimonia"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Cerim&ocirc;nia e Recep&ccedil;&atilde;o <small>/Informa&ccedil;&otilde;es detalhadas</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>A cerimônia de casamento acontecerá na <strong>Igreja São Judas Tadeu</strong> às <strong>19:45h</strong> do dia <strong>12 de Setembro de 2020</strong>.</p>
                        <p>Pedimos que não se atrase pois este momento é muito especial para nós e gostaríamos que fizesse parte dele por completo! Contamos com você!</p>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1>Endereço da Igreja</h1>
                    <section>
                        <p>Igreja São Judas Tadeu</p>
                        <p>Av. Jabaquara - Planalto Paulista, São Paulo - SP, 04046-500</p>
                    </section>
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
            
            <div class="mapa">
                <div >
                    <h1>Como Chegar <small>/Localiza&ccedil;&atilde;o</small></h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.332694677172!2d-46.64646548467211!3d-23.628253584649716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b6bac91c551%3A0x221de69c0d4279d!2sIgreja%20S%C3%A3o%20Judas%20Tadeu!5e0!3m2!1spt-BR!2sbr!4v1581006135086!5m2!1spt-BR!2sbr" allowfullscreen=""></iframe>
                </div>
                <div>
                    <section>
                        <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>

            <div class="container principal">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/opt/bullet.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>
            

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1>Endereço da Recepção</h1>
                    <section>
                        <p>Espaço Maria Callas</p>
                        <p>R. Amborés, 180 - Jabaquara, São Paulo - SP, 04319-110</p>
                    </section>
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

        <div class="mapa">
            <div >
                <h1>Como Chegar <small>/Localiza&ccedil;&atilde;o</small></h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.7419629529963!2d-46.63570958467182!3d-23.649410284639245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b297493a7f5%3A0xc8fbd36170864400!2sEspa%C3%A7o%20Maria%20Callas!5e0!3m2!1spt-BR!2sbr!4v1581006388857!5m2!1spt-BR!2sbr" allowfullscreen=""></iframe>
            </div>
            <div>
                <section>
                    <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Estacionamento</h2>
                <section>
                    <p>A casa de festa provê estacionamento com serviço de valet sem custos. Mas lembre-se: se beber, não dirija!</p>
                </section>
            </div>
        </div>

		<div id="push"></div>
	</div>


	<?php
		include_once("../template/footer.tpl.php");
		include_once("../template/javascript.tpl.php");
	?>
</body>
</html>


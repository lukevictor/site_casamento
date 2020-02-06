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

            <div class="mapa">
                <div >
                    <h1>Como Chegar <small>/Localiza&ccedil;&atilde;o</small></h1>
                    <iframe src="https://www.google.com/maps/place/Igreja+S%C3%A3o+Judas+Tadeu/@-23.6282536,-46.6464655,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5b6bac91c551:0x221de69c0d4279d!8m2!3d-23.6282536!4d-46.6442768" allowfullscreen></iframe>
                </div>
                <div>
                    <section>
                        <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
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
                <iframe src="https://www.google.com/maps/place/Espa%C3%A7o+Maria+Callas/@-23.6494054,-46.6357096,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5b297493a7f5:0xc8fbd36170864400!8m2!3d-23.6494103!4d-46.6335209" allowfullscreen></iframe>
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


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
                            <h1>Camilla Azevedo</h1>
                            <div class="img-avatar" style="background-image: url(../assets/images/opt/camilla.jpg);"></div>
                            <section>
                                <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Delegadis gente finis, bibendum egestas augue arcu ut est. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Nec orci ornare consequat</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="frame-conjuge-wrapper">
                        <div class="frame-conjuge">
                            <h1>Felipe Leão</h1>
                            <div class="img-avatar" style="background-image: url(../assets/images/opt/felipe3.jpg);"></div>
                            <section>
                                <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Delegadis gente finis, bibendum egestas augue arcu ut est. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Nec orci ornare consequat</p>
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
                        <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Delegadis gente finis, bibendum egestas augue arcu ut est. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Pra lá , depois divoltis porris, paradis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! In elementis mé pra quem é amistosis quis leo.</p>
                        <p>Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Manduma pindureta quium dia nois paga.</p>
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


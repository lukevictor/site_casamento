<?php include_once("../config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak>
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

        <div class="topo noivos">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="titulo">Os Noivos</div>
                    </div>
                </div>
            </div>
        </div>

    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Nossa Hist&oacute;ria <small>/Como tudo come&ccedil;ou</small></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="im1" style="background-image: url(../assets/images/camilla.jpg);">
                        <div class="im_arrows"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <section>
                        <p>Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mé, boa gentis num é. Delegadis gente finis, bibendum egestas augue arcu ut est. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Pra lá , depois divoltis porris, paradis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! In elementis mé pra quem é amistosis quis leo.</p>
                        <p>Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Manduma pindureta quium dia nois paga.</p>
                    </section>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="im2" style="background-image: url(../assets/images/felipe.jpg);">
                        <div class="im_arrows"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <section>
                        <p>Mé faiz elementum girarzis, nisi eros vermeio. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Delegadis gente finis, bibendum egestas augue arcu ut est. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Aenean aliquam molestie leo, vitae iaculis nisl. Quem num gosta di mim que vai caçá sua turmis! Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.</p>
                        <p>Manduma pindureta quium dia nois paga. Quem num gosta di mim que vai caçá sua turmis! Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. In elementis mé pra quem é amistosis quis leo.</p>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                    <section>
                        <img src="../assets/images/brasao.png" alt="Camilla e Feliipe" class="img-responsive center">
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


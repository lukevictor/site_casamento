<?php include_once("../src/config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak>
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

         <div class="topo presentes"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Lista de Presentes <small>/Op&ccedil;ões para nos mimar</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Para aqueles que quiserem nos mimar um pouco (=p) selecionamos algumas lojas e criamos listas de presentes com itens para montarmos nosso novo lar.</p>
                        <p>Caso n&atilde;o se sinta confort&aacute;vel em realizar compras/pagamentos pela internet, é possível ir diretamente à alguma unidade física das lojas que listamos abaixo e visualizar lá mesmo a listagem dos itens que selecionamos.</p>
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
            

            <div class="row card-loja">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <!-- <img src="../assets/images/Fast-Shop-Logo.jpg" class="img-responsive center" /> -->
                    <img src="../assets/images/logo_fast.png" class="img-responsive center" />
                </div>
                <div class="col-md-8">
                    <h1>Fast Shop</h1>
                    <p>Loja de eletrônicos e eletrodomésticos. Caso prefira uma loja física é possível encontrá-las em diversos shoppings na cidade do Rio de Janeiro.</p>
                    <p><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<a target="_blank" href="#">Link direto para a lista</a></p>
                </div>
            </div>

            <div class="row card-loja">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <!-- <img src="../assets/images/Etna-Logo.png" class="img-responsive center" /> -->
                    <img src="../assets/images/logo_tokstok.png" class="img-responsive center" />
                </div>
                <div class="col-md-8">
                    <h1>Tok &amp; Stok</h1>
                    <p>Loja móveis utensílios domésticos, decora&ccedil;&atilde;o, etc. No rio de Janeiro as filiais físicas se encontram na Barra da Tijuca, Botafogo, Copacabana, Niterói e Norte Shopping.</p>
                    <p><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<a target="_blank" href="https://lic.tokstok.com.br/lic/convidados/listaPresentes.jsf?idLista=271015">Link direto para a lista</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>

             <div class="row">
                <div class="col-md-12">
                    <h1>Outras Op&ccedil;ões <small>/Caso você prefira</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Atendendo à solicita&ccedil;ões de algumas pessoas, optamos por disponibilizar também nossas contas correntes para os que preferirem nos presentear em dinheiro.</p>
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

            <!-- Inserir cards simples, um ao lado do outro, somente com as informa&ccedil;ões das contas do BB, Caixa e Inter -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card-banco">
                        <div class="logo"><img class="img-responsive" src="../assets/images/logo_bb.png" /></div>
                        <dl>
                            <dt>Banco</dt><dd>Banco do Brasil (001)</dd>
                            <dt>Agência</dt><dd>2933</dd>
                            <dt>Conta</dt><dd>38929-3</dd>
                            <dt>Nome</dt><dd>Camilla Lopes da Silva Azevedo</dd>
                            <dt>CPF</dt><dd>124.051.237-62</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-banco">
                        <div class="logo"><img src="../assets/images/logo_caixa.png" /></div>
                        <dl>
                            <dt>Banco</dt><dd>Caixa Econ&ocirc;mica Fed. (104)</dd>
                            <dt>Agência</dt><dd>3072</dd>
                            <dt>Conta</dt><dd>1771-2</dd>
                            <dt>Nome</dt><dd>Felipe Braga Carneiro Le&atilde;o</dd>
                            <dt>Opera&ccedil;&atilde;o</dt><dd>013</dd>
                            <dt>CPF</dt><dd>117.303.927-92</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-banco">
                        <div class="logo"><img src="../assets/images/logo_inter.png" /></div>
                        <dl>
                        <dt>Banco</dt><dd>Banco Inter (077)</dd>
                            <dt>Agência</dt><dd>0001-9</dd>
                            <dt>Conta</dt><dd>1116899-4</dd>
                            <dt>Nome</dt><dd>Camilla Lopes da Silva Azevedo</dd>
                            <dt>CPF</dt><dd>124.051.237-62</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-banco">
                        <div class="logo"><img src="../assets/images/logo_inter.png" /></div>
                        <dl>
                            <dt>Banco</dt><dd>Banco Inter (077)</dd>
                            <dt>Agência</dt><dd>0001-9</dd>
                            <dt>Conta</dt><dd>785630-0</dd>
                            <dt>Nome</dt><dd>Felipe Braga Carneiro Le&atilde;o</dd>
                            <dt>CPF</dt><dd>117.303.927-92</dd>
                        </dl>
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


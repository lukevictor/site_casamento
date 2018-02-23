<?php include_once("config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php
        define("TEMPLATE_ESTILO", "template/estilos_landing.tpl.php");
		include_once("template/header.tpl.php");
    ?>

<body>
	<?php
		include_once("template/body_begin.tpl.php");
	?>

	<div class="vignette">
		<p>Meu conteúdo aqui!!!</p>
	</div>

	<?php
		include_once("template/body_end.tpl.php");
		include_once("template/footer.tpl.php");
		include_once("template/javascript.tpl.php");
	?>
</body>
</html>


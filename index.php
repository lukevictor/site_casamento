<?php include_once("config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php
        define("TEMPLATE_ESTILO", "template/estilos_landing.tpl.php");
		include_once("template/header.tpl.php");
    ?>

<body ng-app="app" ng-controller="LandingController" ng-init="init()">
	<?php
		include_once("template/body_begin.tpl.php");
	?>

	<div class="vignette">
		<div class="countdown">
		<timer end-time="dataCasamento">{{ddays}} dia{{daysS}}</timer>
		<timer end-time="dataCasamento">{{hhours}} hora{{hoursS}}</timer>
		<timer end-time="dataCasamento">{{mminutes}} minuto{{minutesS}}</timer>
		<timer end-time="dataCasamento">{{sseconds}} segundo{{secondsS}}</timer>
		</div>
	</div>

	<?php
		include_once("template/body_end.tpl.php");
		include_once("template/footer.tpl.php");
		include_once("template/javascript.tpl.php");
	?>
</body>
</html>


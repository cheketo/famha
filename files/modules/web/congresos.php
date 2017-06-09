<?php include ('config.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php include ('../../../files/includes/inc.web.head.php'); ?>
</head>
<body>
	<header>
		<?php include ('../../../files/includes/inc.web.nav.php'); ?>
	</header>
	<?php include('../../../files/includes/inc.web.headsection.php'); ?><!-- Head Image Under Nav -->
	<div class="wrapper">
		<div class="container">
			<div class="row main-row">
				<div class="col-md-12"> <!-- Set class to col-md-7 if sidebar is active -->
				<!-- /////// CONTENT //////// -->
					<div class="row home-content-row">
						<div class="main-titles">
							<h2>PR&Oacute;XIMOS CONGRESOS</h2>
						</div>
						<div class="news-item-a">
							<img src="../../../skin/web/images/logos/logo_congreso_famha.jpg" alt="" />
							<div class="titles">
								<h2>12&deg; Congreso FAMHA - Homeopat&iacute;a, paradigma del SXXI</h2>
								<span>Tenemos el agrado de invitarlo a participar del próximo 12&deg; Congreso FAMHA que se realizar&aacute; del 24 al 27 de Octubre de 2018</span>
							</div>
							<p>
								El congreso est&aacute; dirigido a todos los home&oacute;patas y alumnos de las diferentes escuelas de Homeopat&iacute;a. Para poder participar, deber&aacute; inscribirse previamente. ¡Inscribi&eacute;ndose antes del 31 de Julio accede a grandes descuentos!
							</p>
							<div class="news-btn">
								<a href="http://www.amha.org.ar/files/modules/web/formulario_congreso.php" target="_blank"><button type="button" class="btn hollowBtn" name="button"><i class="fa fa-plus-circle"></i> Ver m&aacute;s</button></a>
							</div>
						</div>
						
						<!--<p>-->
						<!--	<b>12&deg; Congreso FAMHA - Homeopat&iacute;a, paradigma del SXXI</b><br>-->
						<!--	Del 24 al 27 de Octubre del 2018, en CABA, Argentina<br><br>-->
						<!--	<b>Para m&aacute;s informaci&oacute;n: </b><br>-->
						<!--	<a href="http://www.amha.org.ar/files/modules/web/formulario_congreso.php" target="_blank" class="btn btn-primary">Ver m&aacute;s informaci&oacute;n</a>-->
						<!--</p>-->
						<!--<hr>-->
						<!--<p>-->
						<!--	<b>72&deg; Congreso de la Liga Médica Homeopática Internacional</b><br>-->
						<!--	14 a 17 de junio de 2017, en Leipzig, Alemania<br><br>-->
						<!--	<b>Para m&aacute;s informaci&oacute;n: </b><br>-->
						<!--	<a href="http://www.lmhi-congress-2017.de/" target="_blank">http://www.lmhi-congress-2017.de/</a><br>-->
						<!--</p>-->
					</div>
				<!-- //////// END CONTENT  //////// -->
				</div><!-- /.col-md-7 -->
				<!-- SIDEBAR-1 (has col-md-5 inside) -->
				<?php // include('../../../files/includes/inc.web.sidebar.php'); ?>
				<!-- SIDEBAR-1 -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- wrapper -->
	<?php
	 // include ('../../../files/includes/inc.web.contacto.php');
		include ('../../../files/includes/inc.web.footer.php');
		include ('../../../files/includes/inc.web.scripts.php');
	?>
	</body>
</html>

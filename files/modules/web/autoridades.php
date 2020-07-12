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
				<div class="col-md-12"><!-- Set class to col-md-7 if sidebar is active -->
				<!-- /////// CONTENT //////// -->
					<div class="row home-content-row">
						<div class="main-titles">
							<h2>Consejo Directivo de la FAMHA</h2>
							<p class="text-muted">2019-2021</p>
						</div>
						<div class="col-md-6">
							<p><b>Presidente:</b> Dr. Adolfo Campanelli (AMHA) </br></p>
							<p><b>Vicepresidente:</b> Dra. Myriam Sorbera (CEMHHCba) </br></p>
							<p><b>Secretario:</b> Dra. Patricia Macagno (EMHA)</p>
							<p><b>Tesorero:</b> Dra. Miriam García de Vallerotto (CEMHH)</br></p>
							<p><b>1&deg; Vocal:</b> Dra. Elena Figari (AMHA)</p>
							<p><b>2&deg; Vocal:</b> Dra. Marta Russo (EMHA)</br></p>
							<p><b>3&deg; Vocal:</b> Dra. Graciela Fó (CEMHH)</p>
						</div>
						<div class="col-md-6">
							<b>Vocales Suplentes</b><br>
							<b>1&deg; Vocal Suplente:</b> Dra. Nadia Reta (AMHA)<br>
							<b>2&deg; Vocal Suplente:</b> Dra. Alberta Cumaldi (EMHA)<br>
							<b>3&deg; Vocal Suplente:</b> Dra. Eliana Rodríguez (CEMHH) </br>
							<hr>
							<b>&Oacute;rgano de Fiscalizaci&oacute;n</b><br>
							<b>Revisora de Cuentas:</b> Dr. Roberto Zaldúa (AMHA)<br>
							<b>Revisor de Cuentas Suplente:</b> Lorenzo Mendiz&aacute;bal (CEMHHCba)<br>
							<hr>
							<b>Comit&eacute; de &Eacute;tica</b><br>
							Dr. Roque Penna (AMHA)<br>
							Dr. Juan Schaffer (EMHA)<br>
							Dra. Myriam Sorbera (CEMHH)<br>
						</p>
						<hr>
						</div>
						<!-- <a href="memoria_y_balance.php"><button type="button" class="btn btnMain" name="button">Memoria y Balance</button></a> -->
					</div>
				<!-- //////// END CONTENT  //////// -->
				</div><!-- /.col-md-7 -->
				<!-- SIDEBAR-1 (has col-md-5 inside) -->
				<?php //include('../../../files/includes/inc.web.sidebar.php'); ?>
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

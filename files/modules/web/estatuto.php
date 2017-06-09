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
							<h3>Estatuto</h3>
						</div>
						<img src="../../../skin/web/images/body/pictures/estatuto.jpg" alt="" />

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

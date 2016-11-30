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
				<div class="col-md-7">
				<!-- /////// CONTENT //////// -->
					<div class="row home-content-row">
						<div class="main-titles">
							<h2>Novedades</h2>
						</div>
						<!-- News Version A -->
						<div class="news-item-a">

							<img src="../../../skin/web/images/body/news/news.jpg" alt="" />
							<div class="titles">
								<h2>Esto es el T&iacute;tulo del art&iacute;culo</h2>
								<span>Esto es el SubT&iacute;tulo del art&iacute;culo</span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euolore eu fugiat nulla...
							</p>
							<div class="news-btn">
								<a href="novedades-articulo.php"><button type="button" class="btn hollowBtn" name="button"><i class="fa fa-book"></i> Leer Art&iacute;culo completo</button></a>
							</div>
						</div>
						<!-- /News Version A -->


						<!-- News Version B -->
						<div class="news-item-b">
							<div class="titles">
								<h2>Esto es el T&iacute;tulo del art&iacute;culo</h2>
								<span>Esto es el SubT&iacute;tulo del art&iacute;culo</span>
							</div>
							<img src="../../../skin/web/images/body/news/news-w.jpg" alt="" />
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div class="news-btn">
								<a href="novedades-articulo.php"><button type="button" class="btn hollowBtn" name="button"><i class="fa fa-book"></i> Leer Art&iacute;culo completo</button></a>
							</div>
						</div>
						<!-- /News Version B -->
						<hr>
					</div>
				<!-- //////// END CONTENT  //////// -->
				</div><!-- /.col-md-7 -->
				<!-- SIDEBAR-1 (has col-md-5 inside) -->
				<?php include('../../../files/includes/inc.web.sidebar.php'); ?>
				<!-- SIDEBAR-1 -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- wrapper -->
	<?php include ('../../../files/includes/inc.web.contacto.php'); ?>
	<?php include ('../../../files/includes/inc.web.footer.php'); ?>
  <?php include ('../../../files/includes/inc.web.scripts.php'); ?>
	</body>
</html>

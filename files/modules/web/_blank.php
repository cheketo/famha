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
	<!-- Slider -->
	<!-- <div class="slider">
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		  </ul>
		</div>
	</div> -->

	<div class="container ">
		<div class="row home-image">
			<img src="../../../skin/web/images/body/slider1.jpg" alt="" />
		</div>
	</div>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				<!-- CONTENT -->

					<h1>Esto es un Titulo 1</h1>
					<h2>Esto es un Titulo 2</h2>
					<h3>Esto es un Titulo 3</h3>
					<h4>Esto es un Titulo 4</h4>
					<h5>Esto es un Titulo 5</h5>
					<h6>Esto es un Titulo 6</h6>
					<span class="muted-text">Estoy Muteado</span>
					<br>
					<span class="muted-text-italic">Estoy Muteado</span>

					<br>
					<i class="fa fa-check"></i>
					<hr>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</p>




				<!-- END CONTENT -->
				</div><!-- /.col-md-7 -->
				<!-- SIDEBAR (has col-md-5 inside) -->
				<?php include('../../../files/includes/inc.web.sidebar.php'); ?>
				<!-- SIDEBAR -->
			</div>
		</div>

	</div><!-- wrapper -->
	<?php include ('../../../files/includes/inc.web.contacto.php'); ?>
	<?php include ('../../../files/includes/inc.web.footer.php'); ?>
  <?php include ('../../../files/includes/inc.web.scripts.php'); ?>
	</body>
</html>

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
				<div class="col-md-9 center-form">
				<!-- /////// CONTENT //////// -->
					<div class="row home-content-row">
						<div class="main-titles">
							<h2>Contactenos</h2>
						</div>
						<form class="main-form">
							<div class="form-group">
								<label for="name" id="label-name">Nombre:</label>
								<input type="name" class="form-control" id="name" placeholder="Ingrese su nombre">
							</div>
							<div class="form-group">
								<label for="tel">Tel&eacute;fono:</label>
								<input type="name" class="form-control" id="tel" placeholder="Ingrese su tel&eacute;fono">
							</div>
							<div class="form-group">
								<label for="email">E-Mail:</label>
								<input type="email"  class="form-control" id="email" placeholder="Ingrese su email">
							</div>
							<div class = "form-group">
						  <label for = "name">Mensaje / Consulta</label>
						  <textarea class = "form-control" rows = "3"></textarea>
							</div>
							<button type="submit" class="btn btnMain">Enviar</button>
						</form>
						<hr>
						<p>
							Tambien puede escribirnos directamente a <a href="mailto:jinfo@famha.org.ar">info@famha.org.ar</a>
						</p>
						<hr>
					</div>
				<!-- //////// END CONTENT  //////// -->
				</div><!-- /.col-md-7 -->
				<!-- SIDEBAR-1 (has col-md-5 inside) -->
				<!--<?php //include('../../../files/includes/inc.web.sidebar2.php'); ?>-->
				<div class="col-md-3 txC">
					<h4>Auspiciantes</h4>
					<div class="ads-column txC">
						<a href="https://www.facebook.com/farmacias.vassallo/" target="_blank" class="img-text-item2 txC"><img src="../../../skin/web/images/body/ads/bannervassallo.jpg" alt=""  class="img-responsive"/></a>
						<br>
						<hr>
						<br>
						<a href="http://www.farmaciacaledonia.com.ar" target="_blank" class="img-text-item2 txC"><img src="../../../skin/web/images/body/ads/bannercaledonia.png" alt=""  class="img-responsive"/></a>
						<!--<a target="_blank" class="img-text-item2 txC"><img src="../../../skin/web/images/body/ads/bannervassallo.jpg" alt=""  class="img-responsive"/></a>-->
						<!--<hr>-->
						<!--<a target="_blank" class="img-text-item2 txC"><img src="../../../skin/web/images/body/ads/bannervassallo.jpg" alt=""  class="img-responsive"/></a>-->
						<!--<hr>-->
						<!--<a target="_blank" class="img-text-item2 txC"><img src="../../../skin/web/images/body/ads/bannervassallo.jpg" alt=""  class="img-responsive"/></a>-->
					</div>
					
						<!--<a target="_blank"><img src="../../../skin/web/images/body/ads/bannervassallo.jpg" alt=""  class="img-responsive"/></a>-->
						<!--<a target="_blank"><img src="../../../skin/web/images/body/ads/bannervassallo.jpg" alt=""  class="img-responsive"/></a>-->
					 	<!--<a target="_blank"><img src="../../../skin/web/images/body/ads/bannervassallo.jpg" alt=""  class="img-responsive"/></a>-->
					    <!--<h4>Titulo del anuncio</h4>-->
					    <!--<hr>-->
					    <!--<p class="inner-text">-->
					    <!--  Este es el texto de un anuncio lateral. El mismo admite 3 l&iacute;neas. M&aacute;s una direcci&oacute;n abajo.   Este es el texto de un anuncio lateral.-->
					    <!--</p>-->
					    <!--<span class="muted-text-italic"><i class="fa fa-phone"></i> Tel&eacute;fono: 011 5454-5454</span>-->
					  </div>
				</div>
				<!-- SIDEBAR-1 -->
			</div><!-- row -->
		</div><!-- container -->
		<?php include('../../../files/includes/inc.web.links.php'); ?>
	</div><!-- wrapper -->
	<?php
		//include ('../../../files/includes/inc.web.contacto.php');
		include ('../../../files/includes/inc.web.footer.php');
  	include ('../../../files/includes/inc.web.scripts.php');
	?>
	</body>
</html>

<?php
  // To echo class 'active' in links
  $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  $parts = parse_url($url);
  $str = $parts['scheme'].'://'.$parts['host'].$parts['path'];
  $currentPage = basename($str);
?>
<div class="wrap-sticky" style="height: 80px;">
  <nav class="navbar navbar-default navbar-sticky bootsnav on no-full">
    <div class="container">
      <!-- Start Header Navigation -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
              <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="index.php"><img src="../../../skin/web/images/logos/logo1.png" class="logo" alt=""></a>
      </div>
      <!-- End Header Navigation -->
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse collapse" id="navbar-menu" aria-expanded="true" style="">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <li class="<?php echo $currentPage == 'index.php' ? 'active' : ''; ?>"><a href="index.php">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">F.A.M.H.A.</a>
            <ul class="dropdown-menu animated fadeOut" style="display: none; opacity: 1;">
              <!-- <li><a href="antecedentes.php">Antecedentes históricos y objetivos</a></li> -->
              <li><a href="colegio_de_homeopatas.php">Colegio de Médicos Home&oacute;patas</a></li>
              <li><a href="autoridades.php">Autoridades</a></li>
              <li><a href="estatuto.php">Estatuto</a></li>
            </ul>
          </li>
          <li class="<?php echo $currentPage == 'congresos.php' ? 'active' : ''; ?>"><a href="congresos.php">Congresos</a></li>
          <li class="<?php echo $currentPage == 'novedades.php' ? 'active' : ''; ?>"><a href="novedades.php">Novedades</a></li>
          <li class="<?php echo $currentPage == 'contacto.php' ? 'active' : ''; ?>"><a href="contacto.php">Contacto</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
</div>

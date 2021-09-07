<html>

<head>
  <!-- Common libraries -->
  <?php echo (file_get_contents('./inc/libraries.php')); ?>

  <!-- SEO & Accessibility -->
  <title>Matba Rofex - Sobre Nosotros - Autoridades</title>
</head>

<body>
  <!-- Nav -->
  <?php echo (file_get_contents('./inc/nav.php')); ?>

  <img src="img/header-5-optimized.jpg" class=" img-fluid" />

  <main class="container pt-4">
    <div class="row">
      <div class="col-sm-4 d-none d-lg-block d-lx-block">

        <!-- Sidebar -->
        <?php include_once('./inc/sidebar.php'); ?>

      </div>
      <div class="col-lg-8 col-xl-8 col-md-12 cards">

        <h1>Normas internas</h1>

        <a href="./estatutosocial.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Estatuto Social
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
        <a href="./reglamentointerno.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Reglamento Interno
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
        <a href="http://www.matba.com.ar/Disposiciones/Circulares" class="btn btn-secondary btn-block text-left" target="_blank">
            Avisos y Circulares
            <span class="float-right mt1"><i class="fas fa-link fa-lg"></i></span>
        </a>
        <a href="./horariodenegociacion.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Horario de Negociación
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
        <a href="./derechosderegistro.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Derecho de registro
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
	</a>
        <a href="./LPA.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Límites de Posiciones Abiertas
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
	<a href="./Margenes.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Márgenes Productos
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
	<a href="./GuiadeFusion.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Guía de Fusión
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
        <p>&nbsp;</p>

      </div>
    </div>
  </main>

  <!-- Nav -->
  <?php print_r(file_get_contents('./inc/footer.php')); ?>
</body>

</html>

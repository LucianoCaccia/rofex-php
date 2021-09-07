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

  <img src="img/header-6-optimized.jpg" class=" img-fluid" />

  <main class="container pt-4">
    <div class="row">
      <div class="col-sm-4 d-none d-lg-block d-lx-block">

        <!-- Sidebar -->
        <?php include_once('./inc/sidebar.php'); ?>

      </div>
      <div class="col-lg-8 col-xl-8 col-md-12 cards">

        <h1>Agentes MatbaRofex</h1>

        <a href="./listadodeagentes.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Listado de Agentes MatbaRofex
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
        <a href="./agentesdma.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Agentes Habilitados DMA
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
        <a href="./proveedoresdeliquidez.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Proveedores de Liquidez
            <span class="float-right mt1"><i class="far fa-file-pdf fa-lg"></i></span>
        </a>
        <a href="./agentesinterconectados.pdf" target="_blank" class="btn btn-secondary btn-block text-left">
            Agentes Interconectados
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

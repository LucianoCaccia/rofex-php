<html>
  <head>
    <!-- Common libraries -->
    <?php echo(file_get_contents('./inc/libraries.php')); ?>

    <!-- SEO & Accessibility -->
    <title>Matba Rofex - Sobre Nosotros - Autoridades</title>
  </head>
  <body>
    <!-- Nav -->
    <?php echo(file_get_contents('./inc/nav.php')); ?>

    <img src="img/header-2-optimized.jpg" class=" img-fluid" />

    <main class="container pt-4">
      <div class="row">
          <div class="col-sm-4 d-none d-lg-block d-lx-block">

              <!-- Sidebar -->
              <?php include_once('./inc/sidebar.php'); ?>

          </div>
          <div class="col-sm-8 col-lg-8 col-xl-8 col-md-12 cards">

          <h1>Organigrama</h1>
          <a href="img/organigrama-b.png" target="_blank">
            <img src="img/organigrama.png" class="img-fluid" alt="Responsive image">
          </a>
        </div>
      </div>
    </main>

    <!-- Nav -->
    <?php print_r(file_get_contents('./inc/footer.php')); ?>
  </body>
</html>

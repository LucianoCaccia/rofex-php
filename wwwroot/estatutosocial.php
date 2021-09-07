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
      <div class="col-sm-4">

        <!-- Sidebar -->
        <?php include_once('./inc/sidebar.php'); ?>

      </div>
      <div class="col-sm-8 cards">

        <h1>Estatuto Social</h1>

        <p>...TBD...</p>

      </div>
    </div>
  </main>

  <!-- Nav -->
  <?php print_r(file_get_contents('./inc/footer.php')); ?>
</body>

</html>

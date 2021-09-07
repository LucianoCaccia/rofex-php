<html>
  <head>
    <!-- Common libraries -->
    <?php echo(file_get_contents('./inc/libraries.php')); ?>

    <!-- SEO & Accessibility -->
    <title>Matba Rofex</title>
  </head>
  <body>
    <!-- Nav -->
    <?php echo(file_get_contents('./inc/nav.php')); ?>
    <!-- Header -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide miclase"
        data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"
            class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          
          <div class="carousel-item active"
            style="background-image: url('img/slide-2-optimized.jpg')">
            <div class="carousel-caption d-md-block">
              <h2 class="display-4">Simplificamos</h2>
            </div>
          </div>

          <div class="carousel-item"
            style="background-image: url('img/slide-3-optimized.jpg')">
            <div class="carousel-caption d-md-block">
              <h2 class="display-4">Integramos</h2>
            </div>
          </div>

          <div class="carousel-item"
            style="background-image: url('img/slide-1-optimized.jpg')">
            <div class="carousel-caption d-md-block">
              <h2 class="display-4">Potenciamos</h2>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- Footer -->
    <?php print_r(file_get_contents('./inc/footer.php')); ?>
  </body>
</html>

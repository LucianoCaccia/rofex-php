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

  <img src="img/header-1-optimized.jpg" class=" img-fluid" />

  <main class="container pt-4">
    <div class="row">
      <div class="col-sm-4 d-none d-lg-block d-lx-block">

        <!-- Sidebar -->
        <?php include_once('./inc/sidebar.php'); ?>

      </div>
      <div class="col-lg-8 col-xl-8 col-md-12 cards">

        <h1>Autoridades</h1>

        <!-- Row 1 -->
        <div class="row">
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-1',
                'title' => 'Andrés E. Ponte',
                'summary' => 'Presidente',
                'body' => 'Director de ROFEX desde 1998. Director de la Bolsa de Comercio de Rosario entre 2014 y 2016. Dejó su cargo allí para asumir la presidencia de ROFEX.',
                'image' => './img/comite/AndresPonte.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php
              $modal = [
                'id' => 'autoridades-2',
                'title' => 'Marcos A. Hermansson',
                'summary' => 'Vicepresidente',
                'body' => 'Fue Director de MATba de 2002 a 2009 y Presidente de 2016 a 2019. Presidente de la Fundación MATba de 2016 a la fecha.',
                'image' => './img/comite/MarcosHermansson.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-3',
                'title' => 'Francisco J. M. Fernández Candia',
                'summary' => 'Secretario',
                'body' => 'Licenciado en Economia. Director de MATba de 2016 a 2019.',
                'image' => './img/comite/FranciscoFernandezCandia.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>

        <!-- Row 2 -->
        <div class="row">
          <div class="col-sm-4">
            <?php
              $modal = [
                'id' => 'autoridades-4',
                'title' => 'Luis A. Herrera',
                'summary' => 'Tesorero',
                'body' => 'Contador Público Nacional y Licenciado en Administración de Empresas en la Universidad Nacional de Rosario. Fue Presidente de ROFEX de 2002 a 2006 y de 2012 a 2016.',
                'image' => './img/comite/LuisHerrera.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-5',
                'title' => 'Ignacio M. Bosch',
                'summary' => 'Vocal Titular',
                'body' => 'Ingeniero Agrónomo de la Universidad Católica Argentina. Vicepresidente de MATba de 2016 a 2019.',
                'image' => './img/comite/IgnacioBosch.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-6',
                'title' => 'Marcelo J. Rossi',
                'summary' => 'Vocal Titular',
                'body' => 'Contador Público y Licenciado en Administración en la Universidad Nacional de Rosario. Master en Dirección de Empresas del IAE y Doctor of Business Administration de la University of Sarasota. Se desempeñó como Director Titular en ROFEX y como Vicepresidente de Argentina Clearing.',
                'image' => './img/comite/MarceloRossi.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>

        <!-- Row 3 -->
        <div class="row">
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-7',
                'title' => 'Alfredo R. Conde',
                'summary' => 'Vocal Titular',
                'body' => 'Socio Fundador de Primary en 1997. Se desempeñó como Director Titular de Primary y ROFEX.',
                'image' => './img/comite/AlfredoConde.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-8',
                'title' => 'Juan Fabricio Silvestri',
                'summary' => 'Vocal Titular',
                'body' => 'Ingeniero Industrial en la Universidad Nacional de Rosario. Presidente de Argentina Clearing. Se desempeñó como Director Titular en ROFEX.',
                'image' => './img/comite/FabricioSilvestri.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-9',
                'title' => 'Ricardo Daniel Marra',
                'summary' => 'Vocal Titular',
                'body' => 'Ingeniero Agrónomo de la Universidad de Buenos Aires. Fue Presidente de la Bolsa de Cereales de Buenos Aires, Director de MATba y Presidente de 2002 a 2009.',
                'image' => './img/comite/RicardoMarra.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>

        <!-- Row 4 -->
        <div class="row">
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-10',
                'title' => 'Ignacio E. Miles',
                'summary' => 'Vocal Titular',
                'body' => 'Contador Público en la Universidad Nacional de Rosario. Master en Agronegocios en la Universidad Austral. Se desempeñó como Director Titular en ROFEX y como Presidente de Argentina Clearing.',
                'image' => './img/comite/IgnacioMiles.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-11',
                'title' => 'Sebastián M. Bravo',
                'summary' => 'Vocal Titular',
                'body' => 'Contador Público en la Universidad Nacional de Rosario. Se desempeñó como Tesorero en ROFEX. Director Titular de Argentina Clearing.',
                'image' => './img/comite/SebastianBravo.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-12',
                'title' => 'Gustavo C. Cortona',
                'summary' => 'Vocal Titular',
                'body' => 'Licienciado en Economía de la Universidad Nacional de Río Cuarto. Master en Dirección de Empresas en el Centro de Estudios Macroeconómicos de Argentina. Se desempeñó como Director Titular en ROFEX.',
                'image' => './img/comite/GustavoCortona.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>

        <!-- Row 5 -->
        <div class="row">
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-13',
                'title' => 'Leandro Salvatierra',
                'summary' => 'Director Suplente',
                'body' => 'Abogado de la Universidad Nacional de Rosario, Master en Derecho Empresario de la Universidad Austral de Buenos Aires. Se desempeñó como Secretario en ROFEX.',
                'image' => './img/comite/LeandroSalvatierra.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-14',
                'title' => 'Ricardo Gustavo Forbes',
                'summary' => 'Director Suplente',
                'body' => 'Fue Presidente de la Bolsa de Cereales de Buenos Aires de 2008 a 2009 y Director de MATba en diversos períodos.',
                'image' => './img/comite/Forbes.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-15',
                'title' => 'Ignacio Plaza',
                'summary' => 'Director Suplente',
                'body' => 'Ingeniero Electromecánico en la Universidad de Belgrano. Master en Dirección Estratégica y Tecnológica en la Universidad de Buenos Aires. Se desempeñó como Director Titular de ROFEX.',
                'image' => './img/comite/IgnacioPlaza.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>

        <!-- Row 6 -->
        <div class="row">
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-16',
                'title' => 'José Carlos Martins',
                'summary' => 'Director Suplente',
                'body' => 'Fue Director de MATba entre 2002-2005 y 2010-2015, y Presidente del 2015 al 2016. Actualmente es Presidente de la Bolsa de Cereales de Buenos Aires y Director de MATba.',
                'image' => './img/comite/JoseMartins.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-17',
                'title' => 'Pablo L. Torti',
                'summary' => 'Director Suplente',
                'body' => 'Licenciado en Administración de Empresas en la Universidad Austral. Se desempeñó como Director Titular en Primary y en ROFEX.',
                'image' => './img/comite/PabloTorti.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-18',
                'title' => 'Martín Laplacette',
                'summary' => 'Director Suplente',
                'body' => 'Director de MATba de 2013 a 2019.',
                'image' => './img/comite/Laplacette.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>

        <!-- Row 6 -->
        <div class="row">
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-19',
                'title' => 'Fernando C. Boggione',
                'summary' => 'Director Suplente',
                'body' => 'Operador Bursátil. Se desempeñó como Director Suplente en ROFEX y Director Titular en Argentina Clearing.',
                'image' => './img/comite/FernandoBoggione.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-20',
                'title' => 'Delfín Morgan',
                'summary' => 'Director Suplente',
                'body' => 'Licenciado en Ciencias de la Comunicación de la Universidad Austral y Posgrado en Finanzas de la UCA. Fue Director del MATba de 2017 a 2019.',
                'image' => './img/comite/DelfinMorgan.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-21',
                'title' => 'Juan Franchi',
                'summary' => 'Director Suplente',
                'body' => 'Se desempeñó como Director Titular en ROFEX y como Secretario en Argentina Clearing.',
                'image' => './img/comite/JuanFranchi.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>

        <!-- Row 7 -->
        <div class="row">
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-22',
                'title' => 'Fernando Julián Echazarreta',
                'summary' => 'Director Suplente',
                'body' => 'Abogado. Se desempeñó como Director de MATba de 2018 a 2019.',
                'image' => './img/comite/Echazarreta.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-23',
                'title' => 'Ernesto Antuña',
                'summary' => 'Director Suplente',
                'body' => 'Contador Público con Especialización en Finanzas en la Universidad Nacional de Rosario. Se desempeñó como Director Suplente en ROFEX.',
                'image' => './img/comite/ErnestoAntuna.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
          <div class="col-sm-4">
            <?php $modal = [
                'id' => 'autoridades-24',
                'title' => 'Diego Hernán Cifarelli',
                'summary' => 'Director Suplente',
                'body' => 'Licenciado en Comercialización de la Universidad Católica de Salta y Master en Marketing de la Universidad ESEM de Madrid. Presidente de la Federación Argentina de la Industria Molinera- FAIM- Director de MATba de 2017 a 2019.',
                'image' => './img/comite/DiegoCifarelli.jpg',
              ]; include('./inc/modal.php'); ?>
          </div>
        </div>


        <!-- Row 7 -->
        <div class="row">
          <div class="col-sm-4">
            <div class="card pt-1 pb-3">
              <div class="card-body">
                <h5 class="card-title">Dr. Fernando R. J. Viñals</h5>
                <p class="card-text">Titular Comisión Fiscalizadora</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card pt-1 pb-3">
              <div class="card-body">
                <h5 class="card-title">Dr. José María Ibarbia</h5>
                <p class="card-text">Titular Comisión Fiscalizadora</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card pt-1 pb-3">
              <div class="card-body">
                <h5 class="card-title">Cdor. Sergio Miguel Roldán</h5>
                <p class="card-text">Titular Comisión Fiscalizadora</p>
              </div>
            </div>          
          </div>
        </div>


        <!-- Row 8 -->
        <div class="row">
          <div class="col-sm-4">
            <div class="card pt-1 pb-3">
              <div class="card-body">
                <h5 class="card-title">Cdor. Enrique Mario Lingua</h5>
                <p class="card-text">Suplente Comisión Fiscalizadora</p>
              </div>
            </div>            
          </div>
          <div class="col-sm-4">
            <div class="card pt-1 pb-3">
              <div class="card-body">
                <h5 class="card-title">Sebastián Pels</h5>
                <p class="card-text">Suplente Comisión Fiscalizadora</p>
              </div>
            </div>            
          </div>
          <div class="col-sm-4">
            <div class="card pt-1">
              <div class="card-body">
                <h5 class="card-title">Cdora. María Laura Rodríguez de Sanctis</h5>
                <p class="card-text">Suplente Comisión Fiscalizadora</p>
              </div>
            </div>            
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Nav -->
  <?php print_r(file_get_contents('./inc/footer.php')); ?>
</body>

</html>

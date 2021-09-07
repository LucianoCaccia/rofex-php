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

  <img src="img/header-4-optimized.jpg" class=" img-fluid" />

  <main class="container pt-4">
    <div class="row">
        <div class="col-sm-4 d-none d-lg-block d-lx-block">

            <!-- Sidebar -->
            <?php include_once('./inc/sidebar.php'); ?>

        </div>
        <div class="col-lg-8 col-xl-8 col-md-12 cards">

        <h1>Información para inversores</h1>

        <h2>Estados Financieros</h2>

        <p>-</p>

        <h2>Transferencia de acciones</h2>

        <p>Recuerde que el cedente y cesionario deberán dar cumplimiento a la Resolución AFIP Nro. 3291/2012 y complementarias, mediante la registración de la respectiva cesión a través del sitio web www.afip.gov.ar. Ingresar con clave fiscal al servicio “Registración de Transferencias de Participaciones Societarias”, dentro de los 10 días hábiles contados a partir de la fecha de la referida transferencia. Para mayor información, consulte a su asesor impositivo. Solicitud de Inscripción de Transferencia de Acciones</p>

        <h2>Valor Patrimonial Proporcional actualizado</h2>

        <p>Para solicitar el Valor Patrimonial Proporcional de su participación accionaria, comuníquese con el área de Legales de MATBA ROFEX S.A.: <a href="mailto: legales@matbarofex.com.ar">legales@matbarofex.com.ar</a></p>

        <h2>Convocatorio a Asamblea de Accionistas</h2>

        <p>No existe información vigente.</p>
 	</a>
	<a href="./FormularioTransferenciaAcciones.docx" target="_blank" class="btn btn-secondary btn-block text-left">
            Formulario Transferencia Acciones
            <span class="float-right mt1"><i class="far fa-file-word fa-lg"></i></span>
        </a>
	<p>&nbsp;</p>

      </div>
    </div>
  </main>

  <!-- Nav -->
  <?php print_r(file_get_contents('./inc/footer.php')); ?>
</body>

</html>

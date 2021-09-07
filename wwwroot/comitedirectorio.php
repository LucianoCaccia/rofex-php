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

    <img src="img/header-3-optimized.jpg" class=" img-fluid" />

    <main class="container pt-4">
        <div class="row">
            <div class="col-sm-4 d-none d-lg-block d-lx-block">

                <!-- Sidebar -->
                <?php include_once('./inc/sidebar.php'); ?>

            </div>
            <div class="col-lg-8 col-xl-8 col-md-12 cards">

                <h1>Comités de directorio</h1>

                <div class="row">
                    <div class="col-sm-6">
                        <h2>Comité de Productos y Mercados Agropecuarios</h2>
                        <dl>
                            <dt>Presidente</dt>
                            <dd>Marcos Hermansson</dd>
                            <dt>Integrantes:</dt>
                            <dd>Martín Laplacette</dt>
                            <dd>Ignacio M. Bosch</dt>
                            <dd>Ignacio E. Miles</dt>
                            <dd>Gustavo C. Cortona</dt>
                            <dd>Hugo Abratti</dt>
                            <dd>Delfín Morgan</dt>
                            <dd>Diego Hernán Cifarelli</dt>
                            <dd>Ricardo Daniel Marra</dt>
                        </dl>                                           
                    </div>
                    <div class="col-sm-6">
                        <h2>Comité de Productos y Mercados Financieros</h2>
                        <dl>
                            <dt>Presidente:</dt>
                            <dd>Juan Fabricio Silvestri</dd>
                            <dt>Integrantes:</dt>
                            <dd>Luis A. Herrera</dd>
                            <dd>Fernando C. Boggione</dd>
                            <dd>Ignacio M. Bosch</dd>
                            <dd>Ignacio Plaza</dd>
                            <dd>Francisco J. M. Fernández Candia</dd>
                            <dd>Ernesto Antuña</dd>
                            <dd>Cristian Gardel</dd>
                        </dl>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Comité de Auditoría</h2>
                        <dl>
                            <dt>Presidente</dt>
                            <dd>Marcelo J. Rossi </dd>
                            <dt>Integrantes:</dt>
                            <dd>Francisco J. M. Fernández Candia</dt>
                            <dd>Alfredo R. Conde</dt>
                            <dt>Suplente:</dt>
                            <dd>Fernando Julián Echazarreta</dd>
                        </dl>                        
                    </div>
                    <div class="col-sm-6">
                        <h2>Comité de Finanzas, Riesgos e Inversiones</h2>
                        <dl>
                            <dt>Presidente:</dt>
                            <dd>Luis A. Herrera</dd>
                            <dt>Integrantes:</dt>
                            <dd>Sebastián M. Bravo</dd>
                            <dd>Juan Franchi</dd>
                            <dd>Juan Fabricio Silvestri</dd>
                            <dd>Ricardo Gustavo Forbes</dd>
                            <dd>Fernando Julián Echazarreta</dd> 
                            <dd>Carlos Wagener</dd>                            
                        </dl>                        
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Comité de Remuneraciones y Nominaciones</h2>
                        <dl>
                            <dt>Presidente</dt>
                            <dd>Andrés E. Ponte</dd>
                            <dt>Integrantes:</dt>
                            <dd>Marcos Hermansson</dd>
                            <dd>Francisco J. M. Fernández Candia</dd>
                            <dd>Alfredo R. Conde</dd>
                            <dd>Ignacio E. Miles</dd>
                        </dl>                         
                    </div>
                    <div class="col-sm-6">
                        <h2>Comité de Innovación y Tecnología</h2>
                        <dl>
                            <dt>Presidente:</dt>
                            <dd>Alfredo R. Conde</dd>
                            <dt>Integrantes:</dt>
                            <dd>Ignacio Plaza</dd>
                            <dd>Pablo L. Torti</dd>
                            <dd>Andrés E. Ponte</dd>
                            <dd>Francisco J. M. Fernández Candia</dd>
                            <dd>Delfín Morgan</dd>
                            <dd>José Carlos Martins</dd>
                            <dd>Facundo Vazquez</dd>                           
                        </dl>                        
                    </div>
                </div>


            </div>
        </div>
    </main>

    <!-- Nav -->
    <?php print_r(file_get_contents('./inc/footer.php')); ?>
</body>

</html>

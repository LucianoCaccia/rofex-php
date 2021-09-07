<?php
// Calculate active trail based on current file.
$filename = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$classes[$filename] = 'active';
?>

<nav class="sidebar pt-5 pr-5 d-none d-lg-block d-lx-block">
    <ul class="list-unstyled components">
        <li style="border-bottom:0px;" class="<?php echo $classes['autoridades.php']; ?> <?php echo $classes['comitedirectorio.php']; ?> <?php echo $classes['organigrama.php']; ?> <?php echo $classes['informacioninversores.php']; ?>">
            <a data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
            Sobre Nosotros <i class="fas fa-caret-down"></i></a>
        </li>
        <li style="padding: 0px 10px;">
            <div class="collapse" id="collapse1">
                <ul class="list-unstyled" id="homeSubmenu">
                    <li class="<?php echo $classes['autoridades.php']; ?>">
                        <a href="/autoridades.php">Autoridades</a>
                    </li>
                    <li class="<?php echo $classes['comitedirectorio.php']; ?>">
                        <a href="/comitedirectorio.php">Comité de Directorio</a>
                    </li>
                    <li class="<?php echo $classes['organigrama.php']; ?>">
                        <a href="/organigrama.php">Organigrama</a>
                    </li>
                    <li class="<?php echo $classes['informacioninversores.php']; ?>">
                        <a href="/informacioninversores.php">Información Para Inversores</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="<?php echo $classes['agentes.php']; ?>">
            <a href="/agentes.php">Agentes</a>
        </li>
        <li class="<?php echo $classes['normasinternas.php']; ?>">
            <a href="/normasinternas.php">Normas internas</a>
        </li>
        <li>
            <a href="http://www.matba.com.ar" target="_blank">
            Ir a Matba
            </a>
        </li>
        <li>
            <a href="https://www.rofex.com.ar" target="_blank">
            Ir a Rofex
            </a>
        </li>
    </ul>
</nav>

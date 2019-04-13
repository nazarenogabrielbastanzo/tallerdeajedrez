<?php
/**
 * Quiero hacer una paginación para las fotos.
 * Me baso en la de partidas.
 * Tengo que remitirme a la configuración del sitio.
 * application/config/routes.php
 * 27/03/2019
 */
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$minPage = 1; // No cambia.
$maxPage = ceil(sizeof($photos) / 7); // ceil redondea hacia arriba.
?>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">

    <?php // Botón atrás: ?>
    <li class="page-item <?php echo ($pagina == $minPage) ? 'disabled' : ''; ?>">
      <a class="page-link" href="<?php echo ($pagina != $minPage) ? base_url('fotos/pagina-' . ($pagina - 1)) : 'javascript:void()'; ?>" tabindex="-1" aria-disabled="true">Anterior</a>
    </li>
    <?php // :Botón atrás ?>

<?php // Botones de la paginación: ?>
<?php for ($i = 0; $i < $maxPage; $i++) { ?>
  <li class="page-item <?php echo ($pagina == $minPage + $i) ? 'active' : ''; ?>"><a class="page-link" href="<?php echo base_url(); ?>fotos/pagina-<?php echo $minPage + $i; ?>"><?php echo $minPage + $i; ?></a></li>
<?php } ?>
<?php // :Botones de la paginación ?>

    <?php // Botón adelante: ?>
    <li class="page-item <?php echo ($pagina == $maxPage) ? 'disabled' : ''; ?>">
      <a class="page-link" href="<?php echo ($pagina != $maxPage) ? base_url('fotos/pagina-' . ($pagina + 1)) : 'javascript:void();'; ?>">Siguiente</a>
    </li>
    <?php // :Botón adelante ?>

  </ul>
</nav>

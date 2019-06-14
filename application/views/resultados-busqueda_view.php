<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container-fluid mt-3">
	<h4><?php echo $current; ?></h4>
	<h5>Partidas (<?php echo (isset($resultadosPartidas)) ? sizeof($resultadosPartidas) : '0'; ?>)</h5>
<?php if (isset($resultadosPartidas)): ?>
<br>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Blancas</th>
					<th>Negras</th>
					<th>Resultado</th>
					<th>Fecha</th>
					<th>Evento</th>
				</tr>
			</thead>
			<tbody class="BusquedaRapida">
<?php for ( $i = 0; $i < sizeof($resultadosPartidas); $i++ ): ?>
			<tr style="cursor: pointer;" onclick="window.location.assign('<?= base_url('partida-' . $resultadosPartidas[$i]['partida_id']); ?>');" data-toggle="tooltip" data-html="true" title="<img src='<?= base_url('assets/img/tooltips/'.$resultadosPartidas[$i]['partida_id'].'.png') ?>' width='150'>">
				<td><?= $resultadosPartidas[$i]['blancas']; ?></td>
				<td><?= $resultadosPartidas[$i]['negras']; ?></td>
				<td><?= $resultadosPartidas[$i]['resultado']; ?></td>
				<td><?= $resultadosPartidas[$i]['fecha']; ?></td>
				<td><?= $resultadosPartidas[$i]['evento']; ?></td>
			</tr>
<?php endfor; ?>
<?php endif; ?>
          	<tr>
              <td colspan="5">
								<div class="text-center">
									Se encontraron <?php echo (isset($resultadosPartidas)) ? sizeof($resultadosPartidas) : '0'; ?> partidas con la(s) palabra(s) <b><?php echo $_GET['PalabraClave']; ?></b>
								</div>
							</td>
        		</tr>
				</tbody>
		</table>
	</div>
</section>

<section class="container-fluid mt-3">
<h5>Fotos (<?php echo (isset($resultadosFotos)) ? sizeof($resultadosFotos) : '0'; ?>)</h5>
<?php if (isset($resultadosFotos)): ?>
<br>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Álbum</th>
					<th>Lugar</th>
					<th>Fecha</th>
				</tr>
			</thead>
			<tbody class="BusquedaRapida">
<?php for ( $i = 0; $i < sizeof($resultadosFotos); $i++ ): ?>
			<tr style="cursor: pointer;" onclick="window.location.assign('<?php echo base_url('album-' . $resultadosFotos[$i]['album_id']); ?>');">
				<td><?= $resultadosFotos[$i]['album']; ?></td>
				<td><?= $resultadosFotos[$i]['lugar']; ?></td>
				<td><?= $resultadosFotos[$i]['fecha']; ?></td>
			</tr>
<?php endfor; ?>
<?php endif; ?>
          	<tr>
              <td colspan="3">
								<div class="text-center">
									Se encontraron <?php echo (isset($resultadosFotos)) ? sizeof($resultadosFotos) : '0'; ?> álbums de fotos con la(s) palabra(s) <b><?php echo $_GET['PalabraClave']; ?></b>
								</div>
							</td>
        		</tr>
				</tbody>
		</table>
	</div>
</section>

<section class="container-fluid mt-3">
<h5>Frases (<?php echo (isset($resultadosFrases)) ? sizeof($resultadosFrases) : '0'; ?>)</h5>
<?php if (isset($resultadosFrases)): ?>
<br>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Frase</th>
					<th>Autor</th>
				</tr>
			</thead>
			<tbody class="BusquedaRapida">
<?php for ( $i = 0; $i < sizeof($resultadosFrases); $i++ ): ?>
			<tr style="cursor: pointer;" onclick="window.location.assign('<?php echo base_url('frases#' . $resultadosFrases[$i]['frase_id']); ?>');">
				<td><?= $resultadosFrases[$i]['frase']; ?></td>
				<td><?= $resultadosFrases[$i]['autor']; ?></td>
			</tr>
<?php endfor; ?>
<?php endif; ?>
          	<tr>
              <td colspan="2">
								<div class="text-center">
									Se encontraron <?php echo (isset($resultadosFrases)) ? sizeof( $resultadosFrases) : '0'; ?> frases con la(s) palabra(s) <b><?php echo $_GET['PalabraClave']; ?></b>
								</div>
							</td>
        		</tr>
				</tbody>
		</table>
	</div>
</section>

<?php
$this->load->view('footer_view');
?>
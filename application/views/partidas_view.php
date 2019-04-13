<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');

?>

<section class="container-fluid mt-3">
<h4>Partidas</h4>
<br>
<?php $this->load->view('paginacion_partidas_view'); ?>
	<p style="text-align: center;">Mostrando partidas <?php echo $primera; ?> a <?php echo $ultima; ?> de <?php echo $totalPartidas; ?></p>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Blancas</th>
					<th>Negras</th>
					<th>Resultado</th>
					<th>Fecha</th>
					<th>Evento</th>
					<th>ID</th>
				</tr>
			</thead>
			<tbody class="BusquedaRapida">
<?php for ( $i = 0; $i < sizeof($partidas); $i++ ): ?>
			<tr class="partida" style="cursor: pointer;" onclick="window.location.assign('<?php echo base_url('partida-' . $partidas[$i]['partida_id']); ?>');" data-toggle="tooltip" data-html="true" title="<img src='<?php echo base_url('assets/img/tooltips/'.$partidas[$i]['partida_id'].'.png') ?>' width='150'>">
				<td><?php echo $partidas[$i]['blancas']; ?></td>
				<td><?php echo $partidas[$i]['negras']; ?></td>
				<td><?php echo $partidas[$i]['resultado']; ?></td>
				<td><?php echo $partidas[$i]['fecha']; ?></td>
				<td><?php echo $partidas[$i]['evento']; ?></td>
				<td><?php echo $partidas[$i]['partida_id']; ?></td>
			</tr>
<?php endfor; ?>
				</tbody>
		</table>
	</div>
	<p style="text-align: center;">Mostrando partidas <?php echo $primera; ?> a <?php echo $ultima; ?> de <?php echo $totalPartidas; ?></p>	
<?php $this->load->view('paginacion_partidas_view'); ?>
</section>

<?php $this->load->view('footer_view'); ?>

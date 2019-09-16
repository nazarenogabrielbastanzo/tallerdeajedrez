<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$this->load->view('header_view');
$this->load->view('menu_view');
?>

<section class="container-fluid" style="margin-top: 150px; background-color: white;">
<h4 style="text-align: center;">Partidas</h4>
<br>
<?php $this->load->view('paginacion_partidas_view'); ?>
	<p style="text-align: center;">Mostrando partidas <?php echo $primera; ?> a <?php echo $ultima; ?> de <?php echo $totalPartidas; ?></p>
	<div class="table-responsive">
		<table class="table table-bordered table-hover" style="zoom: 80%;">
			<thead>
				<tr>
					<th style="text-align:right;">Blancas</th>
					<th style="text-align:center;">Resultado</th>
					<th>Negras</th>
					<th>Evento</th>
					<th>Fecha</th>
					<th>ID</th>
				</tr>
			</thead>
			<tbody class="BusquedaRapida">
<?php for ( $i = 0; $i < sizeof($partidas); $i++ ): ?>
			<tr class="partida"
				style="cursor: pointer;"
				onclick="window.location.assign('<?php echo base_url('partida-' . $partidas[$i]['partida_id']); ?>');">
				<td style="text-align:right;"><?php echo $partidas[$i]['blancas']; ?></td>
				<td style="text-align:center;"><?php echo $partidas[$i]['resultado']; ?></td>
				<td><?php echo $partidas[$i]['negras']; ?></td>
				<td><?php echo $partidas[$i]['evento']; ?></td>
				<td><?php echo $partidas[$i]['fecha']; ?></td>
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

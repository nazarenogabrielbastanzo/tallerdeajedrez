<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container-fluid mt-3">
<h4>Partidas</h4>
	<div class="input-group mb-3">
	<div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
	</div>
  <input oninput="w3.filterHTML('#id02', 'tr', this.value);" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Busque aquí . . .">
</div>

<br>
	<div>
		<table class="table table-hover" id="miTabla">
			<thead>
				<tr>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(1)')" style="cursor:pointer">ID&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(2)')" style="cursor:pointer">Blancas&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(3)')" style="cursor:pointer">Negras&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(4)')" style="cursor:pointer">Resultado&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(5)')" style="cursor:pointer">Fecha&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(6)')" style="cursor:pointer">Evento&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
				</tr>
			</thead>

<?php for ( $i = 0; $i < sizeof($partidas); $i++ ): ?>
			<tr class="item" id="id02" style="cursor: pointer;" onclick="window.location.assign('<?= base_url('partida-' . $partidas[$i]['partida_id']); ?>');" data-toggle="tooltip" data-html="true" title="<img src='<?= base_url('assets/img/tooltips/'.$partidas[$i]['partida_id'].'.png') ?>' width='150'>">
				<td><?= $partidas[$i]['partida_id']; ?></td>
				<td><?= $partidas[$i]['blancas']; ?></td>
				<td><?= $partidas[$i]['negras']; ?></td>
				<td><?= $partidas[$i]['resultado']; ?></td>
				<td><?= $partidas[$i]['fecha']; ?></td>
				<td><?= $partidas[$i]['evento']; ?></td>	
			</tr>
<?php endfor; ?>
            <tr>
                <td colspan="6">
					<div class="text-center">
						Se encontraron <?= sizeof( $partidas ) . " partidas"; ?>
					</div>
				</td>
            </tr>
		</table>
	</div>
</section>
<script>
	$(function(){
		$('tr[data-toggle=tooltip]').tooltip({placement:"auto"});
	});
</script>
<?php
$this->load->view('footer_view');
?>
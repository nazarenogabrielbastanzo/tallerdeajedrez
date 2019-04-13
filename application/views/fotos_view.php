<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container-fluid mt-3">
<h4>Fotos</h4>
	<div class="input-group mb-3">
	<div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Buscar:</span>
  </div>
  <input oninput="w3.filterHTML('#id02', 'tr', this.value)" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Busque aquí . . .">
</div>

	<div>
		<table class="table table-hover" id="miTabla2">
			<thead>
				<tr>
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(1)')" style="cursor:pointer">ID&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(2)')" style="cursor:pointer">Torneo&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(3)')" style="cursor:pointer">Lugar&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(4)')" style="cursor:pointer">Fecha&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(5)')" style="cursor:pointer">Cantidad de fotos&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
				</tr>
			</thead>
<?php for ( $i = 0; $i < sizeof($fotos); $i++ ): ?>
			<tr style="cursor: pointer;" onclick="window.location.assign('<?= base_url('album-' . $fotos[$i]['album_id']); ?>')" class="item" id="id02">
				<td><?= $fotos[$i]['album_id']; ?></td>
				<td><?= $fotos[$i]['album']; ?></td>
				<td><?= $fotos[$i]['lugar']; ?></td>
				<td><?= $fotos[$i]['fecha']; ?></td>
				<td><?php
				switch ( $fotos[$i]['album_id'] ) {
					case 1:
						echo 19;
						break;
					case 2:
						echo 124;
						break;
					case 3:
						echo 82;
						break;
					case 4:
						echo 175;
						break;
					case 5:
						echo 89;
						break;
					case 6:
						echo 185;
						break;
					case 7:
						echo 120;
						break;
					case 8:
						echo 147;
						break;
					case 9:
						echo 118;
						break;
					case 10:
						echo 84;
						break;
					case 11:
						echo 66;
						break;
					case 12:
						echo 158;
						break;
					case 13:
						echo 161;
						break;
					case 14:
						echo 8;
						break;
				}
				?></td>
			</tr>
<?php endfor; ?>
			<tr>
                <td colspan="5">
					<div class="text-center">
						Se encontraron&nbsp;<?= sizeof($fotos); ?>&nbsp;álbumes de fotos.</td>
					</div>
            </tr>
		</table>
	</div>
</section>
<?php
$this->load->view('footer_view');
?>
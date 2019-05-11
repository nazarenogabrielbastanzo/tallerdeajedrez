<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header_view');
$this->load->view('menu_view');
?>
<section class="container-fluid mt-3">
<h4><?php echo $current; ?></h4>
<br>
<?php $this->load->view('paginacion_fotos_view'); ?>
<p style="text-align: center;">Mostrando álbums de fotos <?php echo $primera; ?> a <?php echo $ultima; ?> de <?php echo $totalAlbums; ?></p>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Torneo</th>
					<th>Lugar</th>
					<th>Fecha</th>
					<th>Cantidad de fotos</th>
				</tr>
			</thead>
			<tbody class="BusquedaRapida">
<?php for ( $i = 0; $i < sizeof($fotos); $i++ ): ?>
			<tr style="cursor: pointer;" onclick="window.location.assign('<?= base_url('album-' . $fotos[$i]['album_id']); ?>')">
				<td><?php echo $fotos[$i]['album_id']; ?></td>
				<td><?= $fotos[$i]['album']; ?></td>
				<td><?= $fotos[$i]['lugar']; ?></td>
				<td><?= $fotos[$i]['fecha']; ?></td>
				<td style="text-align:center;"><?php
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
					</tbody>
		</table>
	</div>
	<p style="text-align: center;">Mostrando álbums de fotos <?php echo $primera; ?> a <?php echo $ultima; ?> de <?php echo $totalAlbums; ?></p>
<?php $this->load->view('paginacion_fotos_view'); ?>
</section>
<?php
$this->load->view('footer_view');
?>

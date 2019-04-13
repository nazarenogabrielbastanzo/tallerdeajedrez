<div class="w3-container">
	<h1><i class="fa fa-camera w3-xxlarge" aria-hidden="true"></i>&nbsp;Fotos</h1>
	<p><i>Busque un álbum en particular, desde el campo de texto, a continuación:</i></p>
    <input oninput="w3.filterHTML('#id02', 'tr', this.value)" placeholder="Busque aquí..." class="w3-input w3-border w3-pale-yellow" autofocus /><br>
	<div class="w3-responsive">
		<table class="w3-table w3-striped" id="miTabla2">
			<thead>
				<tr class="w3-blue">
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(1)')" style="cursor:pointer">Torneo&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(2)')" style="cursor:pointer">Lugar&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla2', '.item', 'td:nth-child(3)')" style="cursor:pointer">Fecha&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
				</tr>
			</thead>
<?php while ($registro = mysqli_fetch_assoc($resultado)) : ?>
			<tr style="cursor: pointer;" onclick="window.location.assign('<?= "{$registro['vinculo']}"; ?>')" class="w3-hover-green item" id="id02">
				<td class="album"><div class="tooltip"><?= $registro['album']; ?><span class="tooltiptext">Clic aquí para ver el álbum</span></div></td>
				<td class="lugar"><div class="tooltip"><?= $registro['lugar']; ?><span class="tooltiptext">Clic aquí para ver el álbum</span></div></td>
				<td class="fecha"><div class="tooltip"><?= $registro['fecha']; ?><span class="tooltiptext">Clic aquí para ver el álbum</span></div></td>
			</tr>
<?php endwhile; ?>
			<tr class="w3-blue">
                <td colspan="3">Se encontraron&nbsp;<?= $cantidadDeAlbums; ?>&nbsp;álbumes de fotos.</td>
            </tr>
		</table>
	</div>
</div>

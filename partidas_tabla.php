<div class="w3-container">
	<h1><i class="fa fa-trophy w3-xxlarge" aria-hidden="true"></i>&nbsp;Partidas</h1>
    <p><i>Busque una partida en particular, desde el campo de texto, a continuación:</i></p>
    <input oninput="w3.filterHTML('#id02', 'tr', this.value);" placeholder="Busque aquí..." class="w3-input w3-border w3-pale-yellow" autofocus /><br>
	<div class="w3-responsive">
		<table class="w3-table w3-striped" id="miTabla">
			<thead>
				<tr class="w3-blue">
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(1)')" style="cursor:pointer">Blancas&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(2)')" style="cursor:pointer">Negras&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(3)')" style="cursor:pointer">Resultado&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(4)')" style="cursor:pointer">Fecha&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
					<th onclick="w3.sortHTML('#miTabla', '.item', 'td:nth-child(5)')" style="cursor:pointer">Evento&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
				</tr>
			</thead>
<?php while ($registro = mysqli_fetch_assoc($resultado)) : ?>
			<tr style="cursor: pointer;" onclick="window.location.assign('<?= "?page=partida&partida={$registro['vinculo']}&blancas={$registro['blancas']}&negras={$registro['negras']}&resultado={$registro['resultado']}&partida_id={$registro['partida_id']}"; ?>')" class="w3-hover-green item" id="id02">
				<td class="blancas"><div class="tooltip"><?= $registro['blancas']; ?><span class="tooltiptext">Clic aquí para ver la partida</span></div></td>
				<td class="negras"><div class="tooltip"><?= $registro['negras']; ?><span class="tooltiptext">Clic aquí para ver la partida</span></div></td>
				<td class="resultado"><div class="tooltip"><?= $registro['resultado']; ?><span class="tooltiptext">Clic aquí para ver la partida</span></div></td>
				<td class="fecha"><div class="tooltip"><?= $registro['fecha']; ?><span class="tooltiptext">Clic aquí para ver la partida</span></div></td>
				<td class="evento"><div class="tooltip"><?= $registro['evento']; ?><span class="tooltiptext">Clic aquí para ver la partida</span></div></td>				
			</tr>
<?php endwhile; ?>
            <tr class="w3-blue">
                <td colspan="5">Se encontraron <?= "$cantidad_de_partidas partidas"; ?></td>
            </tr>
		</table>
	</div>
</div>
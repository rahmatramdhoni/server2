<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>nama_lokasi</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$NO = 1;
	foreach ($penjadwalan as $lokasi) { ?>
		<tr>
			<td><?php echo $NO++; ?></td>
			<td><?php echo $lokasi->nama_lokasi; ?></td>
		<td>
		<a href="<?php echo base_url(); ?>index.php/Apps/update_lokasi/<?php echo $lokasi->id_lokasi; ?>">edit</a>
		<a href="<?php echo base_url(); ?>index.php/Apps/delete_lokasi/<?php echo $lokasi->id_lokasi; ?>">hapus</a>
		</td>

		</tr>
	<?php }
	?>
		
	</tbody>
</table>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>id_lokasi</th>
			<th>id_lampu</th>
			<th>status</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$NO = 1;
	foreach ($penjadwalan as $detail_lokasi) { ?>
		<tr>
			<td><?php echo $NO++; ?></td>
			<td><?php echo $detail_lokasi->status; ?></td>
		
		<td>
		<a href="<?php echo base_url(); ?>index.php/Apps/update_detail_lokasi/<?php echo $detail_lokasi->id; ?>">edit</a>
		<a href="<?php echo base_url(); ?>index.php/Apps/delete_detail_lokasi/<?php echo $detail_lokasi->id; ?>">hapus</a>
		</td>
		</tr>
	<?php }
	?>

		</tr>
	
		
	</tbody>
</table>
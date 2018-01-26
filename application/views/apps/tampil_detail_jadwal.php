<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>id_jadwal</th>
			<th>id_lampu</th>
			<th>status</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$NO = 1;
	foreach ($penjadwalan as $detail_jadwal) { ?>
		<tr>
			<td><?php echo $NO++; ?></td>
			<td><?php echo $detail_jadwal->status; ?></td>
		
		<td>
		<a href="<?php echo base_url(); ?>index.php/Apps/update_detail_jadwal/<?php echo $detail_jadwal->id; ?>">edit</a>
		<a href="<?php echo base_url(); ?>index.php/Apps/delete_detail_jadwal/<?php echo $detail_jadwal->id; ?>">hapus</a>
		</td>
		</tr>
	<?php }
	?>

		</tr>
	
		
	</tbody>
</table>
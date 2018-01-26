<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>jenis_agent</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$NO = 1;
	foreach ($penjadwalan as $agent) { ?>
		<tr>
			<td><?php echo $NO++; ?></td>
			<td><?php echo $agent->jenis_agent; ?></td>
		
		<td>
		<a href="<?php echo base_url(); ?>index.php/Apps/update_agent/<?php echo $agent->id; ?>">edit</a>
		<a href="<?php echo base_url(); ?>index.php/Apps/delete_agent/<?php echo $agent->id; ?>">hapus</a>
		</td>
		</tr>
	<?php }
	?>

		</tr>
	
		
	</tbody>
</table>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>mode</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$NO = 1;
	foreach ($penjadwalan as $mode) { ?>
		<tr>
			<td><?php echo $NO++; ?></td>
			<td><?php echo $mode->mode; ?></td>
		<td>
		<a href="<?php echo base_url(); ?>index.php/Apps/update_mode/<?php echo $mode->id; ?>">edit</a>
		<a href="<?php echo base_url(); ?>index.php/Apps/delete_mode/<?php echo $mode->id; ?>">hapus</a>
		</td>

		</tr>
	<?php }
	?>
		
	</tbody>
</table>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>id_jadwal</th>
			<th>nama_jadwal</th>
			<th>awal</th>
			<th>akhir</th>
			<th>senin</th>
			<th>selasa</th>
			<th>rabu</th>
			<th>kamis</th>
			<th>jum'at</th>
			<th>sabtu</th>
			<th>minggu</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($penjadwalan as $jadwal) { ?>
		<tr>
			<td><?php echo $jadwal->id_jadwal; ?></td>
			<td><?php echo $jadwal->nama_jadwal; ?></td>
			<td><?php echo $jadwal->waktu_awal; ?></td>
			<td><?php echo $jadwal->waktu_akhir; ?></td>
			<td><?php
			if ($jadwal->senin == '1') { ?>
			<div class="btn-group">
                      <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-success disabled"><i class="fa fa-repeat"></i></a>
            </div>
			<?php } else { ?>
			<div class="btn-group">
                      <a href="" class="btn btn-danger disabled"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-default"><i class="fa fa-repeat"></i></a>
            </div>
			<?php }
				?>
			</td>
			<td><?php
			if ($jadwal->selasa == '1') { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-success disabled"><i class="fa fa-repeat"></i></a>
            </div>
			<?php } else { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-danger disabled"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-default"><i class="fa fa-repeat"></i></a>
            </div>
			<?php }
				?>
			</td>
			<td><?php
			if ($jadwal->rabu == '1') { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-success disabled"><i class="fa fa-repeat"></i></a>
            </div>
			<?php } else { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-danger disabled"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-default"><i class="fa fa-repeat"></i></a>
            </div>
			<?php }
				?>
			</td>
			<td><?php
			if ($jadwal->kamis == '1') { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-success disabled"><i class="fa fa-repeat"></i></a>
            </div>
			<?php } else { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-danger disabled"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-default"><i class="fa fa-repeat"></i></a>
            </div>
			<?php }
				?>
			</td>
			<td><?php
			if ($jadwal->jumat == '1') { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-success disabled"><i class="fa fa-repeat"></i></a>
            </div>
			<?php } else { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-danger disabled"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-default"><i class="fa fa-repeat"></i></a>
            </div>
			<?php }
				?>
			</td>
			<td><?php
			if ($jadwal->sabtu == '1') { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-success disabled"><i class="fa fa-repeat"></i></a>
            </div>
			<?php } else { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-danger disabled"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-default"><i class="fa fa-repeat"></i></a>
            </div>
			<?php }
				?>
			</td>
			<td><?php
			if ($jadwal->minggu == '1') { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-default"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-success disabled"><i class="fa fa-repeat"></i></a>
            </div>
			<?php } else { ?>
				<div class="btn-group">
                      <a href="" class="btn btn-danger disabled"><i class="fa fa-times"></i></a>
                      <a href="" class="btn btn-default"><i class="fa fa-repeat"></i></a>
            </div>
			<?php }
				?>
			</td>
			<td>
			<a href="<?php echo base_url(); ?>index.php/Apps/update_jadwal/<?php echo $jadwal->id_jadwal; ?>">edit</a>
			<a href="<?php echo base_url(); ?>index.php/Apps/delete_jadwal/<?php echo $jadwal->id_jadwal; ?>">hapus</a>
			</td>

		</tr>
	<?php }
	?>
		
	</tbody>
</table>
<form action="<?php echo base_url();?>index.php/Apps/fungsi_update_detail_jadwal/<?php echo $isi['id']; ?>" method="post">
	<br><label>Detail Jadwal</label></br>
	<input type="text" name="a" value="<?php echo $isi['status']; ?>"><br>
	<button type="submit" name="l" value="update">Update Detail Jadwal</button>
</form>
<form action="<?php echo base_url();?>index.php/Apps/fungsi_update_detail_lokasi/<?php echo $isi['id']; ?>" method="post">
	<br><label>Detail Lokasi</label></br>
	<input type="text" name="a" value="<?php echo $isi['status']; ?>"><br>
	<button type="submit" name="l" value="update">Update Detail Lokasi</button>
</form>
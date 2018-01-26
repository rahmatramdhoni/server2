<form action="<?php echo base_url();?>index.php/Apps/fungsi_update_lokasi/<?php echo $isi['id_lokasi']; ?>" method="post">
	<br><label>Nama Lokasi</label></br>
	<input type="text" name="a" value="<?php echo $isi['nama_lokasi']; ?>"><br>
	<button type="submit" name="l" value="update">Update Lokasi</button>
</form>
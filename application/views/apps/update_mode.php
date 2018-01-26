<form action="<?php echo base_url();?>index.php/Apps/fungsi_update_mode/<?php echo $isi['id']; ?>" method="post">
	<br><label>Mode</label></br>
	<input type="text" name="a" value="<?php echo $isi['mode']; ?>"><br>
	<button type="submit" name="l" value="update">Update Mode</button>
</form>
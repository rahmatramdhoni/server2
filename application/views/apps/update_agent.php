<form action="<?php echo base_url();?>index.php/Apps/fungsi_update_agent/<?php echo $isi['id']; ?>" method="post">
	<br><label>Jenis Agent</label></br>
	<input type="text" name="a" value="<?php echo $isi['jenis_agent']; ?>"><br>
	<button type="submit" name="l" value="update">Update Agent</button>
</form>
<form action="<?php echo base_url();?>index.php/Apps/fungsi_tambah_jadwal" method="post">
	<br><label>Nama Jadwal</label></br>
	<input type="text" name="a"><br>
	<label>Waktu Awal</label><br>
	<input type="number" name="b"><br>
	<label>Waktu Akhir</label><br>
	<input type="number" name="c"><br>
	<label>senin</label><br>
	<select name="d">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br>
	<label>selasa</label><br>
	<select name="e">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br>
	<label>rabu</label><br>
	<select name="f">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br>
	<label>kamis</label><br>
	<select name="g">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br>
	<label>jum'at</label><br>
	<select name="h">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br>
	<label>sabtu</label><br>
	<select name="i">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br>
	<label>minggu</label><br>
	<select name="j">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br>
	<button type="submit" name="k" value="submit">Tambah Jadwal</button>
	<button type="submit" name="l" value="update">Update Jadwal</button>

</form>
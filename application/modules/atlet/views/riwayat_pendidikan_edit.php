<?php $var = $this->db->where('guru_pendidikan_id', $_GET['guru_pendidikan_id'])->get('guru_riwayat_pendidikan')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_pendidikan_label ?>" name="guru_pendidikan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_pendidikan_id" value="<?php echo @$_GET['guru_pendidikan_id'] ?>">
</div>
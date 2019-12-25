<?php $var = $this->db->where('guru_jabatan_id', $_GET['guru_jabatan_id'])->get('guru_riwayat_jabatan')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_jabatan_label ?>" name="guru_jabatan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_jabatan_id" value="<?php echo @$_GET['guru_jabatan_id'] ?>">
</div>
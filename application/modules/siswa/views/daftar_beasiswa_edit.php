<?php $var = $this->db->where('siswa_beasiswa_id', $_GET['siswa_beasiswa_id'])->get('siswa_daftar_beasiswa')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->siswa_beasiswa_label ?>" name="siswa_beasiswa_label" class="form-control">
	<input type="hidden" autocomplete="off" name="siswa_beasiswa_id" value="<?php echo @$_GET['siswa_beasiswa_id'] ?>">
</div>